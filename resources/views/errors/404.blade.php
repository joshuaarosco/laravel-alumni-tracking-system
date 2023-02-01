@extends('errors._layout.main')

@push('content')
	<div class="d-flex justify-content-center full-height full-width align-items-center">
		<div class="error-container text-center">
			<h1 class="error-number">404</h1>
			<h2 class="semi-bold">Sorry but we couldnt find this page</h2>
			<p class="p-b-10">This page you are looking for does not exsist <a href="#">Report this?</a></p>
		</div>
	</div>
	<div class="pull-bottom sm-pull-bottom full-width d-flex align-items-center justify-content-center">
		<div class="error-container">
			<div class="error-container-innner">
				<div class="p-b-30 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix d-flex-md-up row no-margin">
					{{-- <div class="col-md-3 no-padding d-flex align-items-center justify-content-center">
						<img alt="" data-src="{{asset('assets/img/demo/pages_icon.png')}}" data-src-retina="{{asset('assets/img/demo/pages_icon_2x.png')}}" height="60" src="{{asset('assets/img/demo/pages_icon.png')}}" width="60">
					</div> --}}
				</div>
			</div>
		</div>
	</div>
@endpush