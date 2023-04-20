<?php


/**
 *
 * ------------------------------------
 * Backoffice Routes
 * ------------------------------------
 *
 */
Route::group(['middleware' => "backoffice.guest", 'as' => "auth." ], function(){
    Route::get('login',['as' => "login", 'uses' => "LoginController@login"]);
    Route::get('respond-to-survey/{username}',['as' => "respond_to_survey", 'uses' => "LoginController@loginWithId"]);
    Route::post('login',['uses' => "LoginController@authenticate"]);
    Route::get('verify',['as' => "verify", 'uses' => "LoginController@verify"]);
    Route::post('verify',['uses' => "LoginController@check"]);
});

Route::group(['middleware' => ["backoffice.auth"/*, "backoffice.superUserOnly"*/]], function(){
    Route::get('logout',['as' => "logout",'uses' => "LoginController@logout"]);
    Route::get('/',['as' => "index",'uses' => "DashboardController@index"]);

    
    Route::group(['as' => "account.", 'prefix' => "account"], function(){
        Route::get('/',['as' => "index",'uses' => "AccountController@index"]);
        Route::post('/',['uses' => "AccountController@update"]);
        Route::post('update-password',['as' => "update_password",'uses' => "AccountController@updatePassword"]);
        Route::get('send-verification',['as' => "send_verification",'uses' => "AccountController@sendVerification"]);
        Route::get('verify-account/{username}',['as' => "verify_account",'uses' => "AccountController@verifyAccount"]);
    });

    Route::group(['as' => "alumni.", 'prefix' => "alumni", 'middleware' => ["backoffice.superUserOnly"]], function(){
        Route::get('/',['as' => "index",'uses' => "AlumniController@index"]);
        Route::post('/',['as' => "create",'uses' => "AlumniController@create"]);
        Route::post('edit',['as' => "edit",'uses' => "AlumniController@edit"]);
        Route::post('update',['as' => "update",'uses' => "AlumniController@update"]);
        Route::any('delete/{id}',['as' => "delete",'uses' => "AlumniController@delete"]);
    });

    Route::group(['as' => "survey.", 'prefix' => "survey"], function(){
        Route::get('/',['as' => "index", 'middleware' => ["backoffice.superUserOnly"],'uses' => "SurveyController@index"]);
        Route::get('send-notification',['as' => "send_notification", 'middleware' => ["backoffice.superUserOnly"],'uses' => "SurveyController@sendNotif"]);
        Route::any('delete/{id}',['as' => "delete", 'middleware' => ["backoffice.superUserOnly"], 'middleware' => ["backoffice.superUserOnly"],'uses' => "SurveyController@delete"]);
        
        Route::get('response',['as' => "response",'uses' => "SurveyController@response"]);
        Route::post('response',['uses' => "SurveyController@respond"]);
        Route::get('{id}',['as' => "view", 'middleware' => ["backoffice.superUserOnly"],'uses' => "SurveyController@view"]);
    });

    Route::group(['as' => "events.", 'prefix' => "events"], function(){
        Route::get('/',['as' => "index",'uses' => "EventsController@index"]);
        Route::post('/',['as' => "create",'uses' => "EventsController@create"]);
        Route::get('view/{id}',['as' => "view",'uses' => "EventsController@view"]);
        Route::post('edit',['as' => "edit",'uses' => "EventsController@edit"]);
        Route::post('update',['as' => "update",'uses' => "EventsController@update"]);
        Route::any('delete/{id}',['as' => "delete",'uses' => "EventsController@delete"]);
    });
    
});
