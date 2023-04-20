@extends('backoffice.auth._layout.main')

@push('content')
<div class="login-wrapper">
    <div class="bg-pic">
        {{-- <img alt="" class="lazy" data-src="{{asset('web/assets/images/PSU_banner.jpg')}}" data-src-retina="{{asset('web/assets/images/PSU_banner.jpg')}}" src="{{asset('web/assets/images/PSU_banner.jpg')}}"> --}}
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
            <h2 class="semi-bold text-white">Alumni Tracking System</h2>
            <p class="small">of CCS of Pangasinan State University Lingayen Campus</p>
        </div>
    </div>
    <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
            <h3>{{config()->get('app.name')}}</h3>
            @if(session()->has('notification-status'))
            <div class="m-t-35 alert alert-{{session()->get('notification-status')}}" role="alert">
                <button class="close" data-dismiss="alert"></button>
                <strong>{{Str::title(session()->get('notification-status'))}}: </strong> {{session()->get('notification-msg')}}
            </div>
            @else
            <p class="p-t-35">Please make sure to enter the details you provided after the clearance.</p>
            @endif
            <form action="" method="POST" class="p-t-15" id="form-login" name="form-login" role="form">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-default">
                            <label>First Name <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input class="form-control" name="fname" placeholder="First Name" required="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-default">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input class="form-control" name="lname" placeholder="Last Name" required="" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group form-group-default">
                    <label>Email <span class="text-danger">*</span></label>
                    <div class="controls">
                        <input class="form-control" name="email" placeholder="Email" required="" type="email">
                    </div>
                </div>
                <button class="btn btn-success btn-cons m-t-10" type="submit">Verify</button>
                <a class="btn btn-default btn-cons m-t-10" href="{{route('backoffice.auth.login')}}">Back to Sign In</a>
            </form>
        </div>
    </div>
</div>
@endpush
