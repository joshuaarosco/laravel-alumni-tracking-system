	<div class="quickview-wrapper" data-pages="quickview" id="quickview">
		<ul class="nav nav-tabs" role="tablist">
			<li class="">
				<a data-target="#quickview-notes" data-toggle="tab" href="#quickview-notes" role="tab">Notes</a>
			</li>
			<li>
				<a data-target="#quickview-alerts" data-toggle="tab" href="#quickview-alerts" role="tab">Alerts</a>
			</li>
			<li class="">
				<a class="active" data-toggle="tab" href="#quickview-chat" role="tab">Chat</a>
			</li>
		</ul><a class="btn-link quickview-toggle" data-toggle="quickview" data-toggle-element="#quickview"><i class="pg-close"></i></a>
		<div class="tab-content">
			<div class="tab-pane no-padding" id="quickview-notes">
				<div class="view-port clearfix quickview-notes" id="note-views">
					<div class="view list" id="quick-note-list">
						<div class="toolbar clearfix">
							<ul class="pull-right">
								<li>
									<a class="delete-note-link" href="#"><i class="fa fa-trash-o"></i></a>
								</li>
								<li>
									<a class="new-note-link" data-navigate="view" data-view-animation="push" data-view-port="#note-views" href="#"><i class="fa fa-plus"></i></a>
								</li>
							</ul><button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
						</div>
						<ul>
							<li data-noteid="1">
								<div class="left">
									<div class="checkbox check-warning no-margin">
										<input id="qncheckbox1" type="checkbox" value="1"> <label for="qncheckbox1"></label>
									</div>
									<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								</div>
								<div class="right pull-right">
									<span class="date">12/12/14</span> <a data-navigate="view" data-view-animation="push" data-view-port="#note-views" href="#"><i class="fa fa-chevron-right"></i></a>
								</div>
							</li>
							<li data-noteid="2">
								<div class="left">
									<div class="checkbox check-warning no-margin">
										<input id="qncheckbox2" type="checkbox" value="1"> <label for="qncheckbox2"></label>
									</div>
									<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								</div>
								<div class="right pull-right">
									<span class="date">12/12/14</span> <a href="#"><i class="fa fa-chevron-right"></i></a>
								</div>
							</li>
							<li data-noteid="2">
								<div class="left">
									<div class="checkbox check-warning no-margin">
										<input id="qncheckbox3" type="checkbox" value="1"> <label for="qncheckbox3"></label>
									</div>
									<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								</div>
								<div class="right pull-right">
									<span class="date">12/12/14</span> <a href="#"><i class="fa fa-chevron-right"></i></a>
								</div>
							</li>
							<li data-noteid="3">
								<div class="left">
									<div class="checkbox check-warning no-margin">
										<input id="qncheckbox4" type="checkbox" value="1"> <label for="qncheckbox4"></label>
									</div>
									<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								</div>
								<div class="right pull-right">
									<span class="date">12/12/14</span> <a href="#"><i class="fa fa-chevron-right"></i></a>
								</div>
							</li>
							<li data-noteid="4">
								<div class="left">
									<div class="checkbox check-warning no-margin">
										<input id="qncheckbox5" type="checkbox" value="1"> <label for="qncheckbox5"></label>
									</div>
									<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								</div>
								<div class="right pull-right">
									<span class="date">12/12/14</span> <a href="#"><i class="fa fa-chevron-right"></i></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="view note" id="quick-note">
						<div>
							<ul class="toolbar">
								<li>
									<a class="close-note-link" href="#"><i class="pg-arrow_left"></i></a>
								</li>
								<li>
									<a class="fs-12" data-action="Bold" href="#"><i class="fa fa-bold"></i></a>
								</li>
								<li>
									<a class="fs-12" data-action="Italic" href="#"><i class="fa fa-italic"></i></a>
								</li>
								<li>
									<a class="fs-12" href="#"><i class="fa fa-link"></i></a>
								</li>
							</ul>
							<div class="body">
								<div>
									<div class="top">
										<span>21st april 2014 2:13am</span>
									</div>
									<div class="content">
										<div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane no-padding" id="quickview-alerts">
				<div class="view-port clearfix" id="alerts">
					<div class="view bg-white">
						<div class="navbar navbar-default navbar-sm">
							<div class="navbar-inner">
								<a class="inline action p-l-10 link text-master" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="javascript:;"><i class="pg-more"></i></a>
								<div class="view-heading">
									Notications
								</div><a class="inline action p-r-10 pull-right link text-master" href="#"><i class="pg-search"></i></a>
							</div>
						</div>
						<div class="list-view boreded no-top-border" data-init-list-view="ioslist">
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									Calendar
								</div>
								<ul>
									<li class="alert-list">
										<a class="align-items-center" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="javascript:;">
										<p class=""><span class="text-warning fs-10"><i class="fa fa-circle"></i></span></p>
										<p class="p-l-10 overflow-ellipsis fs-12"><span class="text-master">David Nester Birthday</span></p>
										<p class="p-r-10 ml-auto fs-12 text-right"><span class="text-warning">Today<br></span> <span class="text-master">All Day</span></p></a>
									</li>
									<li class="alert-list">
										<a class="align-items-center" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#">
										<p class=""><span class="text-warning fs-10"><i class="fa fa-circle"></i></span></p>
										<p class="p-l-10 overflow-ellipsis fs-12"><span class="text-master">Meeting at 2:30</span></p>
										<p class="p-r-10 ml-auto fs-12 text-right"><span class="text-warning">Today</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									Social
								</div>
								<ul>
									<li class="alert-list">
										<a class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="javascript:;">
										<p class=""><span class="text-complete fs-10"><i class="fa fa-circle"></i></span></p>
										<p class="col overflow-ellipsis fs-12 p-l-10"><span class="text-master link">Jame Smith commented on your status<br></span> <span class="text-master">“Perfection Simplified - Company Revox"</span></p></a>
									</li>
									<li class="alert-list">
										<a class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="javascript:;">
										<p class=""><span class="text-complete fs-10"><i class="fa fa-circle"></i></span></p>
										<p class="col overflow-ellipsis fs-12 p-l-10"><span class="text-master link">Jame Smith commented on your status<br></span> <span class="text-master">“Perfection Simplified - Company Revox"</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									Sever Status
								</div>
								<ul>
									<li class="alert-list">
										<a class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#">
										<p class=""><span class="text-danger fs-10"><i class="fa fa-circle"></i></span></p>
										<p class="col overflow-ellipsis fs-12 p-l-10"><span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span> <span class="text-master">Server Load Exceeted. Take action</span></p></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane active no-padding" id="quickview-chat">
				<div class="view-port clearfix" id="chat">
					<div class="view bg-white">
						<div class="navbar navbar-default">
							<div class="navbar-inner">
								<a class="inline action p-l-10 link text-master" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="javascript:;"><i class="pg-plus"></i></a>
								<div class="view-heading">
									Chat List
									<div class="fs-11">
										Show All
									</div>
								</div><a class="inline action p-r-10 pull-right link text-master" href="#"><i class="pg-more"></i></a>
							</div>
						</div>
						<div class="list-view boreded no-top-border" data-init-list-view="ioslist">
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									a
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/1.jpg')}}" data-src-retina="{{asset('assets/img/profiles/1x.jpg')}}" height="34" src="{{asset('assets/img/profiles/1x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">ava flores</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									b
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/2.jpg')}}" data-src-retina="{{asset('assets/img/profiles/2x.jpg')}}" height="34" src="{{asset('assets/img/profiles/2x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">bella mccoy</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/3.jpg')}}" data-src-retina="{{asset('assets/img/profiles/3x.jpg')}}" height="34" src="{{asset('assets/img/profiles/3x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">bob stephens</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									c
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/4.jpg')}}" data-src-retina="{{asset('assets/img/profiles/4x.jpg')}}" height="34" src="{{asset('assets/img/profiles/4x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">carole roberts</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/5.jpg')}}" data-src-retina="{{asset('assets/img/profiles/5x.jpg')}}" height="34" src="{{asset('assets/img/profiles/5x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">christopher perez</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									d
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/6.jpg')}}" data-src-retina="{{asset('assets/img/profiles/6x.jpg')}}" height="34" src="{{asset('assets/img/profiles/6x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">danielle fletcher</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/7.jpg')}}" data-src-retina="{{asset('assets/img/profiles/7x.jpg')}}" height="34" src="{{asset('assets/img/profiles/7x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">david sutton</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									e
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/8.jpg')}}" data-src-retina="{{asset('assets/img/profiles/8x.jpg')}}" height="34" src="{{asset('assets/img/profiles/8x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">earl hamilton</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/9.jpg')}}" data-src-retina="{{asset('assets/img/profiles/9x.jpg')}}" height="34" src="{{asset('assets/img/profiles/9x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">elaine lawrence</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/1.jpg')}}" data-src-retina="{{asset('assets/img/profiles/1x.jpg')}}" height="34" src="{{asset('assets/img/profiles/1x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">ellen grant</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/2.jpg')}}" data-src-retina="{{asset('assets/img/profiles/2x.jpg')}}" height="34" src="{{asset('assets/img/profiles/2x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">erik taylor</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/3.jpg')}}" data-src-retina="{{asset('assets/img/profiles/3x.jpg')}}" height="34" src="{{asset('assets/img/profiles/3x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">everett wagner</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									f
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/4.jpg')}}" data-src-retina="{{asset('assets/img/profiles/4x.jpg')}}" height="34" src="{{asset('assets/img/profiles/4x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">freddie gomez</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									g
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/5.jpg')}}" data-src-retina="{{asset('assets/img/profiles/5x.jpg')}}" height="34" src="{{asset('assets/img/profiles/5x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">glen jensen</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/6.jpg')}}" data-src-retina="{{asset('assets/img/profiles/6x.jpg')}}" height="34" src="{{asset('assets/img/profiles/6x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">gwendolyn walker</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									j
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/7.jpg')}}" data-src-retina="{{asset('assets/img/profiles/7x.jpg')}}" height="34" src="{{asset('assets/img/profiles/7x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">janet romero</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									k
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/8.jpg')}}" data-src-retina="{{asset('assets/img/profiles/8x.jpg')}}" height="34" src="{{asset('assets/img/profiles/8x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">kim martinez</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									l
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/9.jpg')}}" data-src-retina="{{asset('assets/img/profiles/9x.jpg')}}" height="34" src="{{asset('assets/img/profiles/9x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">lawrence white</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/1.jpg')}}" data-src-retina="{{asset('assets/img/profiles/1x.jpg')}}" height="34" src="{{asset('assets/img/profiles/1x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">leroy bell</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/2.jpg')}}" data-src-retina="{{asset('assets/img/profiles/2x.jpg')}}" height="34" src="{{asset('assets/img/profiles/2x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">letitia carr</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/3.jpg')}}" data-src-retina="{{asset('assets/img/profiles/3x.jpg')}}" height="34" src="{{asset('assets/img/profiles/3x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">lucy castro</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									m
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/4.jpg')}}" data-src-retina="{{asset('assets/img/profiles/4x.jpg')}}" height="34" src="{{asset('assets/img/profiles/4x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">mae hayes</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/5.jpg')}}" data-src-retina="{{asset('assets/img/profiles/5x.jpg')}}" height="34" src="{{asset('assets/img/profiles/5x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">marilyn owens</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/6.jpg')}}" data-src-retina="{{asset('assets/img/profiles/6x.jpg')}}" height="34" src="{{asset('assets/img/profiles/6x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">marlene cole</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/7.jpg')}}" data-src-retina="{{asset('assets/img/profiles/7x.jpg')}}" height="34" src="{{asset('assets/img/profiles/7x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">marsha warren</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/8.jpg')}}" data-src-retina="{{asset('assets/img/profiles/8x.jpg')}}" height="34" src="{{asset('assets/img/profiles/8x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">marsha dean</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/9.jpg')}}" data-src-retina="{{asset('assets/img/profiles/9x.jpg')}}" height="34" src="{{asset('assets/img/profiles/9x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">mia diaz</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									n
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/1.jpg')}}" data-src-retina="{{asset('assets/img/profiles/1x.jpg')}}" height="34" src="{{asset('assets/img/profiles/1x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">noah elliott</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									p
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/2.jpg')}}" data-src-retina="{{asset('assets/img/profiles/2x.jpg')}}" height="34" src="{{asset('assets/img/profiles/2x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">phyllis hamilton</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									r
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/3.jpg')}}" data-src-retina="{{asset('assets/img/profiles/3x.jpg')}}" height="34" src="{{asset('assets/img/profiles/3x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">raul rodriquez</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/4.jpg')}}" data-src-retina="{{asset('assets/img/profiles/4x.jpg')}}" height="34" src="{{asset('assets/img/profiles/4x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">rhonda barnett</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/5.jpg')}}" data-src-retina="{{asset('assets/img/profiles/5x.jpg')}}" height="34" src="{{asset('assets/img/profiles/5x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">roberta king</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									s
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/6.jpg')}}" data-src-retina="{{asset('assets/img/profiles/6x.jpg')}}" height="34" src="{{asset('assets/img/profiles/6x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">scott armstrong</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/7.jpg')}}" data-src-retina="{{asset('assets/img/profiles/7x.jpg')}}" height="34" src="{{asset('assets/img/profiles/7x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">sebastian austin</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/8.jpg')}}" data-src-retina="{{asset('assets/img/profiles/8x.jpg')}}" height="34" src="{{asset('assets/img/profiles/8x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">sofia davis</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									t
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/9.jpg')}}" data-src-retina="{{asset('assets/img/profiles/9x.jpg')}}" height="34" src="{{asset('assets/img/profiles/9x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">terrance young</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/1.jpg')}}" data-src-retina="{{asset('assets/img/profiles/1x.jpg')}}" height="34" src="{{asset('assets/img/profiles/1x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">theodore woods</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/2.jpg')}}" data-src-retina="{{asset('assets/img/profiles/2x.jpg')}}" height="34" src="{{asset('assets/img/profiles/2x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">todd wood</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/3.jpg')}}" data-src-retina="{{asset('assets/img/profiles/3x.jpg')}}" height="34" src="{{asset('assets/img/profiles/3x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">tommy jenkins</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase">
									w
								</div>
								<ul>
									<li class="chat-user-list clearfix">
										<a class="" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="#"><span class="thumbnail-wrapper d32 circular bg-success"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/4.jpg')}}" data-src-retina="{{asset('assets/img/profiles/4x.jpg')}}" height="34" src="{{asset('assets/img/profiles/4x.jpg')}}" width="34"></span>
										<p class="p-l-10"><span class="text-master">wilma hicks</span> <span class="block text-master hint-text fs-12">Hello there</span></p></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="view chat-view bg-white clearfix">
						<div class="navbar navbar-default">
							<div class="navbar-inner">
								<a class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-animation="push-parrallax" data-view-port="#chat" href="javascript:;"><i class="pg-arrow_left"></i></a>
								<div class="view-heading">
									John Smith
									<div class="fs-11 hint-text">
										Online
									</div>
								</div><a class="link text-master inline action p-r-10 pull-right" href="#"><i class="pg-more"></i></a>
							</div>
						</div>
						<div class="chat-inner" id="my-conversation">
							<div class="message clearfix">
								<div class="chat-bubble from-me">
									Hello there
								</div>
							</div>
							<div class="message clearfix">
								<div class="profile-img-wrapper m-t-5 inline"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/avatar_small.jpg')}}" data-src-retina="{{asset('assets/img/profiles/avatar_small2x.jpg')}}" height="30" src="{{asset('assets/img/profiles/avatar_small.jpg')}}" width="30"></div>
								<div class="chat-bubble from-them">
									Hey
								</div>
							</div>
							<div class="message clearfix">
								<div class="chat-bubble from-me">
									Did you check out Pages framework ?
								</div>
							</div>
							<div class="message clearfix">
								<div class="chat-bubble from-me">
									Its an awesome chat
								</div>
							</div>
							<div class="message clearfix">
								<div class="profile-img-wrapper m-t-5 inline"><img alt="" class="col-top" data-src="{{asset('assets/img/profiles/avatar_small.jpg')}}" data-src-retina="{{asset('assets/img/profiles/avatar_small2x.jpg')}}" height="30" src="{{asset('assets/img/profiles/avatar_small.jpg')}}" width="30"></div>
								<div class="chat-bubble from-them">
									Yea
								</div>
							</div>
						</div>
						<div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
							<div class="row">
								<div class="col-1 p-t-15">
									<a class="link text-master" href="#"><i class="fa fa-plus-circle"></i></a>
								</div>
								<div class="col-8 no-padding">
									<input class="form-control chat-input" data-chat-conversation="#my-conversation" data-chat-input="" placeholder="Say something" type="text">
								</div>
								<div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
									<a class="link text-master" href="#"><i class="pg-camera"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>