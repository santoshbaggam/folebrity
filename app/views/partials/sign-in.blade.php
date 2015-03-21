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

{{ Form::open(['url' => 'sessions']) }}

<div class="form-group">
    {{ Form::label('email', 'Email Address') }}
    {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) }}
</div>

<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
</div><br>

<div class="form-group text-center">
    <button type="submit" class="btn btn-primary">Sign in</button>
</div>

<div class="form-group">
    <a href="/password/remind">Forgot password?</a>
</div>

{{ Form::close() }}