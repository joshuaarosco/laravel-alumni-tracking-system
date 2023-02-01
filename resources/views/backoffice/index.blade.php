@extends('backoffice._layout.main')

@push('title','Dashboard')

@push('included-styles')
<link href="{{asset('assets/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{asset('assets/plugins/mapplic/css/mapplic.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css" media="screen">
<link href="{{asset('assets/plugins/jquery-metrojs/MetroJs.css')}}" rel="stylesheet" type="text/css" media="screen" />
<style>
	.widget-2:after {
   		background-image: url("{{asset('web/assets/images/PSU_dashboard.jpg')}}")!important;
	}
	.widget-1:after {
   		background-image: url("{{asset('web/assets/images/PSU_graduates.jpg')}}")!important;
	}
	.card.full-height {
    	height: unset!important;
	}
	.full-height {
    	height: unset!important;
	}
	.m-t-3{
		margin-top: 3px;
	}
</style>
@endpush

@push('content')
<div class="content sm-gutter">
	<div class="container-fluid padding-25 sm-padding-10">
		<div class="row">
			<div class="col-lg-3">
				<div class="ar-1-1 m-b-10">
					<!-- START WIDGET widget_imageWidgetBasic-->
					<div class="widget-2 card bg-info widget widget-loader-circle-lg no-margin">
						<div class="card-header ">
							<div class="card-controls">
								<ul>
									<li><a href="#" class="card-refresh" data-toggle="refresh"><i
										class="card-icon card-icon-refresh-lg-white"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card-body">
							<div class="pull-bottom bottom-left bottom-right padding-25">
								<span class="label font-montserrat fs-11">PSU</span>
								<br>
								<h3 class="text-white">{{config('app.name')}}.</h3>
								<a href="{{route('index')}}#about-us"><p class="text-white hint-text d-none d-lg-block d-xl-block d-none d-lg-block d-xl-block no-margin">Learn more about the Alumni Tracking System.</p></a>
							</div>
						</div>
					</div>
					<!-- END WIDGET -->
				</div>
				@if(auth()->check() AND auth()->user()->type != 'alumni')
				<a href="{{route('backoffice.survey.send_notification')}}" class="btn btn-success btn-icon-right btn-block" data-toggle="tooltip" title="Send tracker notifications to alumni who had their accounts verified but had not yet responded to the survey.">
					<span>Send Tracker Notification</span><i class="fa fa-paper-plane pull-right m-t-3"></i>
				</a>
				@elseif(auth()->check() AND auth()->user()->type == 'alumni' AND auth()->user()->email_verified_at == null)
				<a href="{{route('backoffice.account.send_verification')}}" class="btn btn-success btn-icon-right btn-block" data-toggle="tooltip" title="Verify your account email before responding to the survey.">
					<span>Send Account Email Verification</span><i class="fa fa-paper-plane pull-right m-t-3"></i>
				</a>
				@endif
			</div>
				<div class="col-lg-4">
					@if(auth()->check() AND auth()->user()->type == 'alumni')
					<div class="m-b-10">
						<div class="ar-1-1 widget-1-wrapper">
							<!-- START WIDGET widget_imageWidget-->
							<div class="widget-1 card  bg-complete no-margin widget-loader-circle-lg">
							  <div class="card-header  top-right ">
								<div class="card-controls">
								  <ul>
									<li><a data-toggle="refresh" class="card-refresh text-black" href="#"><i class="card-icon card-icon-refresh-lg-master"></i></a>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="card-body">
								<div class="pull-bottom bottom-left bottom-right ">
								  <span class="label font-montserrat fs-11 all-caps">PSU</span>
								  <br>
								  <h2 class="text-white">Take the Tracker Survey</h2>
								  <p class="text-white hint-text">{{config('app.name')}}</p>
								  <div class="p-t-10 full-width">
									<a class="btn-circle-arrow b-grey" href="{{route('backoffice.survey.response')}}"><i class="pg-arrow_minimize text-white"></i></a> <span class="hint-text text-white small">Click here to start</span>
								  </div>
								</div>
							  </div>
							</div>
							<!-- END WIDGET -->
						</div>
					</div>
					@else
					<div class="m-b-10">
						<div class="widget-10 card no-border bg-warning no-margin widget-loader-bar">
							<div class="card-header top-left top-right">
								<div class="card-title text-black hint-text">
									<span class="font-montserrat fs-11 all-caps">Total Alumni <i class="fa fa-chevron-right"></i></span>
								</div>
								<div class="card-controls">
									<ul>
										<li>
											<a class="card-refresh text-black" data-toggle="refresh" href="#"><i class="card-icon card-icon-refresh"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body p-t-40">
								<div class="row">
									<div class="col-sm-12">
										<h1 class="no-margin p-b-5 text-white semi-bold">{{$total_alumni}}</h1>
									</div>
								</div>
								<div class="p-t-10 full-width">
									<a class="btn-circle-arrow b-grey" href="{{route('backoffice.alumni.index')}}"><i class="pg-arrow_minimize text-white"></i></a> <span class="hint-text small">Show more</span>
								</div>
							</div>
						</div>
					</div>
					<div class="m-b-10">
						<div class="widget-9 card no-border bg-success no-margin widget-loader-bar">
							<div class="full-height d-flex flex-column">
								<div class="card-header">
									<div class="card-title text-black">
										<span class="font-montserrat fs-11 all-caps">Survey Response vs Total Alumni <i class="fa fa-chevron-right"></i></span>
									</div>
									<div class="card-controls">
										<ul>
											<li>
												<a class="card-refresh text-black" data-toggle="refresh" href="#"><i class="card-icon card-icon-refresh"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="p-l-20">
									<h1 class="no-margin p-b-5 text-white">{{ ($total_survey/$total_alumni)*100 }}%</h1>
								</div>
								<div class="mt-auto">
									<div class="progress progress-small m-b-20">
										<div class="progress-bar progress-bar-white" style="width:{{ ($total_survey/$total_alumni)*100 }}%"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="widget-10 card no-border bg-white no-margin widget-loader-bar">
						<div class="card-header top-left top-right">
							<div class="card-title text-black hint-text">
								<span class="font-montserrat fs-11 all-caps">Total Survey Response <i class="fa fa-chevron-right"></i></span>
							</div>
							<div class="card-controls">
								<ul>
									<li>
										<a class="card-refresh text-black" data-toggle="refresh" href="#"><i class="card-icon card-icon-refresh"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card-body p-t-40">
							<div class="row">
								<div class="col-sm-12">
									<h1 class="no-margin p-b-5 text-warning semi-bold">{{$total_survey}}</h1>
								</div>
							</div>
							<div class="p-t-10 full-width">
								<a class="btn-circle-arrow b-grey" href="{{route('backoffice.survey.index')}}"><i class="pg-arrow_minimize text-warning"></i></a> <span class="hint-text small">Show more</span>
							</div>
						</div>
					</div>
					@endif
				</div>
				<div class="col-lg-5">
					<!-- START WIDGET widget_tableWidgetBasic-->
					@if(auth()->check() AND auth()->user()->type != 'alumni')
					<div class="widget-11-2 card widget-loader-circle full-height d-flex flex-column m-b-10">
						<div class="card-header">
							<div class="card-title">Total Number of
							</div>
							<div class="card-controls">
								<ul>
									<li><a data-toggle="refresh" class="card-refresh" href="#"><i
										class="card-icon card-icon-refresh"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="p-l-20 p-r-20 p-b-10 p-t-5">
							<div class="pull-left">
								<h3 class="text-primary no-margin">Alumni Per Course</h3>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="widget-11-table auto-overflow">
							<table class="table table-condensed table-hover">
								<tbody>
									@foreach ($group_by_course as $index => $course)
										@if($index == '')
										<tr>
											<td class="fs-12 w-50">Not populated</td>
											<td class="w-25">
												<span class="font-montserrat fs-18">{{ $course->count() }}</span>
											</td>
										</tr>
										@else
										<tr>
											<td class="fs-12 w-50">{{$index}}</td>
											<td class="w-25">
												<span class="font-montserrat fs-18">{{ $course->count() }}</span>
											</td>
										</tr>
										@endif
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<div class="widget-11-2 card  no-margin widget-loader-circle full-height d-flex flex-column">
						<div class="card-header">
							<div class="card-title">Total Number of
							</div>
							<div class="card-controls">
								<ul>
									<li><a data-toggle="refresh" class="card-refresh" href="#"><i
										class="card-icon card-icon-refresh"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="p-l-20 p-r-20 p-b-10 p-t-5">
							<div class="pull-left">
								<h3 class="text-primary no-margin">Alumni Per Year</h3>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="widget-11-table auto-overflow">
							<table class="table table-condensed table-hover">
								<tbody>
									@foreach ($group_by_year_graduated as $index => $year)
										@if($index == '')
										<tr>
											<td class="fs-12 w-50">Not populated</td>
											<td class="w-25">
												<span class="font-montserrat fs-18">{{ $year->count() }}</span>
											</td>
										</tr>
										@else
										<tr>
											<td class="fs-12 w-50">Batch {{$index}}</td>
											<td class="w-25">
												<span class="font-montserrat fs-18">{{ $year->count() }}</span>
											</td>
										</tr>
										@endif
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					@endif
				<!-- END WIDGET -->
			</div>
		</div>
	</div>
</div>
@endpush

@push('included-scripts')
<script src="{{asset('assets/plugins/nvd3/lib/d3.v3.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/nvd3/nv.d3.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/nvd3/src/utils.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/nvd3/src/tooltip.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/nvd3/src/interactiveLayer.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/nvd3/src/models/axis.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/nvd3/src/models/line.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/nvd3/src/models/lineWithFocusChart.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/mapplic/js/hammer.min.js')}}"></script>
<script src="{{asset('assets/plugins/mapplic/js/jquery.mousewheel.js')}}"></script>
<script src="{{asset('assets/plugins/mapplic/js/mapplic.js')}}"></script>
<script src="{{asset('assets/plugins/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-metrojs/MetroJs.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/skycons/skycons.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/dashboard.js')}}" type="text/javascript"></script>
@endpush

@push('js')
<script type="text/javascript">
	$(function() {
		$(".page-load").hide();
	});
</script>
@endpush
