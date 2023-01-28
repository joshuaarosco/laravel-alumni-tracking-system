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
    Route::post('login',['uses' => "LoginController@authenticate"]);
});

Route::group(['middleware' => ["backoffice.auth"/*, "backoffice.superUserOnly"*/]], function(){
    Route::get('logout',['as' => "logout",'uses' => "LoginController@logout"]);
    Route::get('/',['as' => "index",'uses' => "DashboardController@index"]);

    Route::group(['as' => "alumni.", 'prefix' => "alumni", 'middleware' => ["backoffice.superUserOnly"]], function(){
        Route::get('/',['as' => "index",'uses' => "AlumniController@index"]);
        Route::post('/',['as' => "create",'uses' => "AlumniController@create"]);
        Route::post('edit',['as' => "edit",'uses' => "AlumniController@edit"]);
        Route::post('update',['as' => "update",'uses' => "AlumniController@update"]);
        Route::any('delete/{id}',['as' => "delete",'uses' => "AlumniController@delete"]);
    });
});
