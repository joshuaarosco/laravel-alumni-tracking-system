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
    .g-form{
        width: 100%;
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
            @include('backoffice.pages.survey._components.survey_form')
        </form>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf-OgJD4TOgG6S80t9MR0q0oiqvUJ3GCRIOFiMlOdHbKkel1Q/viewform?embedded=true" class="g-form" width="640" height="6898" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>       
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
        
        'use strict';
        
        const path = require('path');
        const google = require('@googleapis/forms');
        const {authenticate} = require('@google-cloud/local-auth');
        
        const formID = '1Jr_AUCTggp5AgUp4DAGdX6kDDtlh0t4NhUC4WN4S9WU';
            
            async function runSample(query) {
                const auth = await authenticate({
                    keyfilePath: path.join(__dirname, 'credentials.json'),
                    scopes: 'https://www.googleapis.com/auth/forms.body.readonly',
                });
                const forms = google.forms({
                    version: 'v1',
                    auth: auth,
                });
                const res = await forms.forms.get({formId: formID});
                console.log(res.data);
                return res.data;
            }
            
            if (module === require.main) {
                runSample().catch(console.error);
            }
            module.exports = runSample;
        });
    </script>
    @endpush