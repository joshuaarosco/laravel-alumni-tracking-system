@if(session()->has('notification-status'))
<script type="text/javascript">
    $(document).ready(function() {
        var style = 'circle';
        var title = '{{auth()->user()->name}}';
        var message = '{{session()->get('notification-msg')}}';
        var type = '{{session()->get('notification-status')}}';
        var position = $('.tab-pane.active .position.active').attr('data-placement');

        $('.page-content-wrapper').pgNotification({
            style: style,
            title: title,
            message: message,
            position: position,
            timeout: 0,
            type: type,
            thumbnail: '<img width="40" height="40" style="display: inline-block;" src="{{asset('assets/img/profiles/avatar2x.jpg')}}" data-src="{{asset('assets/img/profiles/avatar.jpg')}}" data-src-retina="{{asset('assets/img/profiles/avatar2x.jpg')}}" alt="">'
        }).show();
    });
</script>
@endif
