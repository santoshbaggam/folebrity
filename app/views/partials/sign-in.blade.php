@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endforeach

@if(Session::has('notification'))
    <div class="alert alert-{{ Session::get('alert_type') }}">
        {{ Session::get('notification') }}
    </div>
@endif

<hr>
<div class="text-center">
    <a href="twitter/login" class="btn btn-primary btn-lg">
        SIGN IN WITH TWITTER
    </a>
</div>
<br>
<div class="text-center">
    <img src="images/brand/twitter-bird-16x16.png">
</div>
<br>
<div class="alert alert-danger text-center">
    You need to be signed in with Twitter
</div>