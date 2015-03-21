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

{{ Form::open(['url' => 'users']) }}

<div class="form-group">
    {{ Form::label('email', 'Email Address') }}
    {{ Form::email('email', '', ['class' => 'form-control contact-form-line', 'placeholder' => 'Email', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('password_confirmation', 'Confirm Password') }}
    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password again', 'required']) }}
</div><br>

<div class="form-group text-center">
    <button type="submit" class="btn btn-primary">Sign up</button>
</div>

<div class="form-group">
    <a href="/login">Already signed up?</a>
</div>

{{ Form::close() }}