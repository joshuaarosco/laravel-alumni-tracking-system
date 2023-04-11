@extends('backoffice._layout.main',['data_table' => true])

@push('title',$title.' List')

@push('included-styles')
@endpush

@push('css')
<style>
    .avatar{
        height: 70px;
        width: 70px;
    }
</style>
@endpush

@push('content')
<div class="content sm-gutter">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('backoffice.index')}}">Home</a></li>
            <li class="breadcrumb-item active">{{Str::title($title)}} List</li>
        </ol>
        <div class="p-3 bg-white b-1">
            <div class="row">
                <div class="col-md-8 col-xs-6">
                    {{Str::upper($title)}} LIST
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-condensed" id="condensedTable">
                <tbody>
                    <tr>
                        <td class="v-align-middle bold" width="5%">#</td>
                        <td class="v-align-middle bold" width="8%">Avatar</td>
                        <td class="v-align-middle bold" width="8%">Name</td>
                        <td class="v-align-middle bold" width="12%">Email | Contact Number</td>
                        <td class="v-align-middle bold" width="10%">Course</td>
                        <td class="v-align-middle bold" width="10%">Work/Position</td>
                        <td class="v-align-middle bold" width="10%">Course related work</td>
                        <td class="v-align-middle bold text-right" width="15%">Actions</td>
                    </tr>
                    @forelse($survey as $index => $info)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td class="v-align-middle semi-bold">
                            <span class="thumbnail-wrapper circular inline avatar">
                                @if($info->alumni->getAvatar()!='/')
                                <img src="{{$info->alumni->getAvatar()}}" alt="avatar" height="40" width="40">
                                @else
                                <img src="{{asset('assets/img/profiles/avatar.jpg')}}" alt="avatar" height="40" width="40">
                                @endif
                            </span>
                        </td>
                        <td class="v-align-middle">{{$info->alumni->fname}} {{$info->alumni->mname}} {{$info->alumni->lname}}</td>
                        <td class="v-align-middle">
                            <a href="mailto:{{$info->alumni->email}}">{{$info->alumni->email}}</a> |
                            <a href="tel:{{$info->alumni->contact_number}}">{{$info->alumni->contact_number}}</a>
                        </td>
                        <td> {{Str::limit($info->alumni->course,50)}} </td>
                        <td> {{Str::limit($info->alumni->work_position,50)}} </td>
                        <td> {{Str::limit($info->alumni->related,50)}} </td>
                        <td class="text-right">
                            <a
                                class="btn btn-default btn-rounded btn-xs btn-edit"
                                title="View" href="{{route('backoffice.survey.view',['id' => $info->id])}}">
                                <i class="fa fa-eye"></i>
                            </a>
                            <button
                            class="btn btn-warning btn-rounded btn-xs btn-delete"
                            title="Delete"
                            data-url="{{route('backoffice.survey.delete',$info->id)}}"
                            data-toggle="modal"
                            data-target="#delete">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            No {{Str::lower(Str::plural($title))}} data yet...
                        </td>
                    </tr>
                    @endforelse
                </tbody>
                @if($survey->count() > 0)
                <tfoot>
                    <tr>
                        <th colspan="6">
                            <div class="row">
                                <div class="col-md-12">

                                </div>
                            </div>
                        </th>
                    </tr>
                </tfoot>
                @endif
            </table>
        </div>
    </div>
</div>
@endpush

@push('modal-view')
@endpush


@push('modal-delete')
<i class="pg pg-trash_line big-icon"></i>
<h5>You are about to <span class="semi-bold text-danger">delete</span> a <span class="semi-bold text-success">{{Str::lower($title)}}</span>, do you want to proceed?</h5>
<br>
<a href="" class="btn btn-success btn-block continue-delete">Continue</a>
<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
@endpush

@push('included-scripts')
@endpush

@push('js')
<script type="text/javascript">
$(function() {
    $(".btn-delete").on("click",function(){
        $(".continue-delete").attr("href",$(this).data('url'));
    });
    $(".page-load").hide();
});
</script>
@endpush


