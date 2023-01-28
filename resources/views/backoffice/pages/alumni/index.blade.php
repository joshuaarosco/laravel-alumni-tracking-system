@extends('backoffice._layout.main',['data_table' => true])

@push('title',$title.' List')

@push('included-styles')
@endpush

@push('css')
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
                    <div class="pull-right table-btn">
                        <button class="btn btn-default btn-xs md-hidden mr-1">
                            <i class="fa fa-filter"></i> Filter
                        </button>
                        <button class="btn btn-success btn-create btn-xs md-hidden" data-toggle="modal" data-target="#create">
                            <i class="fa fa-plus"></i> Create
                        </button>
                    </div>
                </div>
                <div class="col-md-2 sm-hidden">
                    <button class="btn btn-default btn-block btn-xs table-btn">
                        <i class="fa fa-filter"></i>&nbsp;Filter
                    </button>
                </div>
                <div class="col-md-2 sm-hidden">
                    <button class="btn btn-success btn-create btn-block btn-xs table-btn" data-toggle="modal" data-target="#create">
                        <i class="fa fa-plus"></i>&nbsp;Create
                    </button>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-condensed" id="condensedTable">
                <tbody>
                    <tr>
                        <td class="v-align-middle bold" width="5%">#</td>
                        <td class="v-align-middle bold" width="10%">Avatar</td>
                        <td class="v-align-middle bold" width="15%">Name</td>
                        <td class="v-align-middle bold" width="30%">Email | Contact Number</td>
                        <td class="v-align-middle bold" width="35%">Batch</td>
                        <td class="v-align-middle bold" width="35%">Course</td>
                        <td class="v-align-middle bold text-right" width="15%">Actions</td>
                    </tr>
                    @forelse($alumni as $index => $info)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td class="v-align-middle semi-bold">{{$info->code}}</td>
                        <td class="v-align-middle">{{$info->fname}} {{$info->mname}} {{$info->lname}}</td>
                        <td class="v-align-middle">
                            <a href="mailto:{{$info->email}}">{{$info->email}}</a> |
                            <a href="tel:{{$info->contact_number}}">{{$info->contact_number}}</a>
                        </td>
                        <td> {{$info->batch}} </td>
                        <td> {{Str::limit($info->course,50)}} </td>
                        <td class="text-right">
                            <button
                            class="btn btn-default btn-rounded btn-xs btn-edit"
                            title="Edit" data-id="{{$info->id}}"
                            data-toggle="modal"
                            data-target="#edit">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button
                            class="btn btn-warning btn-rounded btn-xs btn-delete"
                            title="Delete"
                            data-url="{{route('backoffice.alumni.delete',$info->id)}}"
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
                @if($alumni->count() > 0)
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

@push('modal-create')
<form method="POST" action="" id="form-personal" role="form" autocomplete="off">
    @csrf
    @include('backoffice.pages.alumni._components.form')
    <div class="clearfix"></div>
    <button class="btn btn-success mr-2" type="submit">Create a new {{Str::lower($title)}}</button>
    <button class="btn btn-warning" data-dismiss="modal">Close</button>
</form>
@endpush

@push('modal-edit')
<form method="POST" action="{{route('backoffice.alumni.update')}}" id="" role="form" autocomplete="off">
    @csrf
    <input type="hidden" name="id" class="{{Str::lower($title)}}-id">
    @include('backoffice.pages.alumni._components.form')
    <div class="clearfix"></div>
    <button class="btn btn-success mr-2" type="submit">Save</button>
    <button class="btn btn-warning" data-dismiss="modal">Close</button>
</form>
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
    $(".btn-edit").on("click",function(){
        $(".load-modal").show();
        let id = $(this).data('id');
        $.ajax({
            type: "POST",
            url: "{{route('backoffice.alumni.edit')}}",
            data: { _id : id , _token : "{{csrf_token()}}" },
            dataType: "json",
            async: true,
            success: function(data){
                const {
                    fname,
                    mname,
                    lname,
                    course,
                    email,
                    contact_number
                } = data.datas;

                $(".alumni-id").val(id);
                $(".alumni-fname").val(fname);
                $(".alumni-mname").val(mname);
                $(".alumni-lname").val(lname);
                $(".alumni-email").val(email);
                $(".alumni-contact_number").val(contact_number);
                $(".alumni-course").val(course);
                $(".load-modal").hide();
            },
            error: function(error){
                console.log(error);
            }
        });
    });
    $(".btn-create").on("click",function(){
        $(".alumni-id").val('');
        $(".alumni-fname").val('');
        $(".alumni-mname").val('');
        $(".alumni-lname").val('');
        $(".alumni-email").val('');
        $(".alumni-contact_number").val('');
        $(".alumni-course").val('');
        $(".load-modal").hide();
    });
    $(".btn-delete").on("click",function(){
        $(".continue-delete").attr("href",$(this).data('url'));
    });
    $(".page-load").hide();
});
</script>
@endpush

