<h1>hello {{$user->name}}</h1>
<p>
	Please click<a href="{{url('reset_password'.$user->email.'/'.$code)}}">Reset Password</a>
</p>