<nav class="page-sidebar" data-pages="sidebar">
	<div class="sidebar-header">
		<label>{{config('app.name')}}</label>
	</div>
	<div class="sidebar-menu">
		<ul class="menu-items">
			<li class="m-t-30 {{in_array(request()->route()->getName(),['backoffice.index'])?'open active':''}}">
				<a class="detailed" href="{{route('backoffice.index')}}">
                    <span class="title">Dashboard</span>
                </a>
                <span class="{{in_array(request()->route()->getName(),['backoffice.index'])?'bg-success':''}} icon-thumbnail">
                    <i class="pg-home"></i>
                </span>
			</li>
            @if(auth()->check() AND (auth()->user()->type == 'super_user' OR auth()->user()->type == 'admin'))
            <li class="{{Request::is('backoffice/alumni*')?'open active':''}}">
                <a href="javascript:;">
                    <span class="title">Alumni</span>
                    <span class="arrow {{Request::is('backoffice/alumni*')?'open active':''}}"></span>
                </a>
                <span class="icon-thumbnail {{Request::is('backoffice/alumni*')?'bg-success':''}}">
                    <i class="fa fa-graduation-cap"></i>
                </span>
                <ul class="sub-menu">
                    <li class="{{in_array(request()->route()->getName(),['backoffice.alumni.index'])?'open active':''}}">
                        <a href="{{route('backoffice.alumni.index')}}">List</a> <span class="icon-thumbnail">l</span>
                    </li>
                </ul>
            </li>
            @endif
		</ul>
		<div class="clearfix"></div>
	</div>
</nav>