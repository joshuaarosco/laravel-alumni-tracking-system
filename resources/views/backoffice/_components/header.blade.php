<div class="header">
	<a class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar" href="#"></a>
	<div class="">
		<div class="brand inline m-l-10">
			<strong>{{config('app.name')}}</strong>
			{{-- <img alt="logo" data-src="{{asset('assets/img/logo.png')}}" data-src-retina="{{asset('assets/img/logo_2x.png')}}" height="22" src="{{asset('assets/img/logo.png')}}" width="78"> --}}
		</div>
	</div>
	<div class="d-flex align-items-center">
		<div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
			<span class="semi-bold">{{ auth()->user()->name }}</span>
		</div>
		<div class="dropdown pull-right d-lg-block d-none">
			<button aria-expanded="false" aria-haspopup="true" class="profile-dropdown-toggle" data-toggle="dropdown" type="button">
				<span class="thumbnail-wrapper d32 circular inline">
					@if(auth()->check())
						@if(auth()->user()->type != 'alumni')
						<img alt="Avatar" data-src="{{asset('assets/img/profiles/avatar.jpg')}}" data-src-retina="{{asset('assets/img/profiles/avatar_small2x.jpg')}}" height="32" src="{{asset('assets/img/profiles/avatar.jpg')}}" width="32">
						@else
							@if(auth()->user()->alumni->getAvatar()!='/')
							<img alt="Avatar" data-src="{{auth()->user()->alumni->getAvatar()}}" data-src-retina="{{auth()->user()->alumni->getAvatar()}}" height="32" src="{{auth()->user()->alumni->getAvatar()}}" width="32">
							@else
							<img alt="Avatar" data-src="{{asset('assets/img/profiles/avatar.jpg')}}" data-src-retina="{{asset('assets/img/profiles/avatar_small2x.jpg')}}" height="32" src="{{asset('assets/img/profiles/avatar.jpg')}}" width="32">
							@endif
						@endif
					@else
					<img alt="Avatar" data-src="{{asset('assets/img/profiles/avatar.jpg')}}" data-src-retina="{{asset('assets/img/profiles/avatar_small2x.jpg')}}" height="32" src="{{asset('assets/img/profiles/avatar.jpg')}}" width="32">
					@endif
				</span>
			</button>
			<div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
				<a class="dropdown-item" href="{{route('backoffice.account.index')}}"><i class="pg-settings_small"></i> Settings</a>
				<a class="clearfix bg-master-lighter dropdown-item" href="#" data-toggle="modal" data-target="#logout">
					<span class="pull-left">Logout</span>
					<span class="pull-right"><i class="pg-power"></i></span>
				</a>
			</div>
		</div>
	</div>
</div>
