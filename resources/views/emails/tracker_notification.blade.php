<!DOCTYPE html>
<html>
<body>
	<h3>Hi {{$data->fname}} {{$data->lname}}</h3>
	<p>Please respond to Alumni Tracker Survey by clicking the link below.</p>
	<p> <a href="{{route('backoffice.auth.respond_to_survey', $data->user->username)}}" target="_blank">{{route('backoffice.auth.respond_to_survey', $data->user->username)}}</a></p>
	<p>
		Thanks,</br>
		{{config('app.name')}}
	</p>
</body>
</html>