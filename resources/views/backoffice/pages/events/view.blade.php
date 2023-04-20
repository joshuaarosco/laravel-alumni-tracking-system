@extends('backoffice._layout.main',['data_table' => true])

@push('title','View '.$title)

@push('included-styles')
@endpush

@push('css')
<style>
    .thumbnail{
        background-image: url({{ $event->getThumbnail() }});
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border-bottom: 1px solid whitesmoke;
        height: 250px;
        width: 100%;
    }
</style>
@endpush

@push('content')
<div class="content sm-gutter">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('backoffice.index')}}">Home</a></li>
            <li class="breadcrumb-item active">View {{Str::title($title)}}</li>
        </ol>
        <div class="row">
            <div class="col-md-7">
                <div class="thumbnail"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="p-3 bg-white b-1">
                    <h3>{{ $event->title }}</h3>
                    <span><i class="fa fa-calendar"></i> {{ date('M d, Y', strtotime($event->date)) }}</span>
                    <h5>{{ $event->content }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endpush

@push('js')
<script>
    $(".page-load").hide();
</script>
@endpush