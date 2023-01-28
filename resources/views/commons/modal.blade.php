@if(isset($data_table))
<div class="modal fade fill-in" id="create" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="pg-close"></i>
    </button>
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-left p-b-5"><span class="semi-bold">Create </span> {{$title}}</h5>
            </div>
            <div class="modal-body">
                @include('backoffice._components.load_modal')
                @stack('modal-create')
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<div class="modal fade fill-in" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="pg-close"></i>
    </button>
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-left p-b-5"><span class="semi-bold">Edit </span> {{$title}}</h5>
            </div>
            <div class="modal-body">
                @include('backoffice._components.load_modal')
                @stack('modal-edit')
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<div class="modal fade fill-in" id="view" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="pg-close"></i>
    </button>
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-left p-b-5">{{$title}} <span class="semi-bold">Details</span></h5>
            </div>
            <div class="modal-body">
                @include('backoffice._components.load_modal')
                @stack('modal-view')
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal fade slide-right" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                </button>
                <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                        <div class="modal-body col-xs-height col-middle text-center">
                            @stack('modal-delete')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="modal fade slide-right" id="logout" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                </button>
                <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                        <div class="modal-body col-xs-height col-middle text-center">
                            <i class="pg-power big-icon"></i>
                            <h5>You are about to <span class="semi-bold text-success">logout</span>, do you want to proceed?</h5>
                            <br>
                            <a href="{{$logout?:null}}" class="btn btn-success btn-block">Continue</a>
                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
