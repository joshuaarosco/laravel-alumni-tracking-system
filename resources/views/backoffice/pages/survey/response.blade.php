@extends('backoffice._layout.main',['data_table' => true])

@push('title',$title.' Response')

@push('included-styles')
@endpush

@push('css')
<link href="{{asset('assets/plugins/dropzone/css/dropzone.css')}}" rel="stylesheet" type="text/css" />
<style>
    .form-group label:not(.error) {
        text-transform: none;
    }
    .radio-label{
        margin-bottom: 0px!important;
        margin-left: 10px;
        color: #000001;
    }
    .form-horizontal .form-group .control-label{
        opacity: 1!important;
        color: #000001;
    }
    .form-group .help {
        color: #000001;
    }
    .error-input{
        border-color: #f55753;
    }
    .plr-5{
        padding-left: 5px;
        padding-right: 5px;
    }
</style>
@endpush

@push('content')
<div class="content sm-gutter">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('backoffice.index')}}">Home</a></li>
            <li class="breadcrumb-item active">{{Str::title($title)}} Response</li>
        </ol>
        <form action="" method="post" autocomplete="on">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="p-3 bg-white b-1">
                <div class="card">
                    <div class="card-body">
                        @include('backoffice.pages.survey._components.personal_information')
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        @include('backoffice.pages.survey._components.questionaire')
                    </div>
                </div>
                @if(!$survey 
                OR $alumni->gender == null 
                OR $alumni->year_graduated == null 
                OR $alumni->course == null 
                OR $alumni->company == null
                OR $alumni->work_position == null)
                <div class="row">
                    <div class="col-md-12">
                        <button aria-label="" class="btn btn-success pull-right" type="submit">Submit Response</button>
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mw-80 pull-right">Thank you for your response!</h2>
                    </div>
                </div>
                @endif
            </div>
        </form>
    </div>
    <!-- END CONTAINER FLUID -->
</div>
@endpush

@push('included-js')
<script src="{{asset('assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('assets/js/form_wizard.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets/plugins/dropzone/dropzone.min.js')}}"></script>
<script src="{{asset('assets/js/form_elements.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/form_layouts.js')}}" type="text/javascript"></script>
@endpush

@push('js')<script type="text/javascript">
    $(function() {
        $(".page-load").hide();
    });
</script>
@endpush