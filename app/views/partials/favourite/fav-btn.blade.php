@if(in_array($profile['id'], $favourites))
    {{ Form::open(['url' => 'unfavourite']) }}
    {{ Form::hidden('id', $profile['id']) }}
    <button class="btn btn-success" id="unfollow-btn" type="submit">
        FAVOURITED
    </button>
    {{ Form::close() }}
@else
    {{ Form::open(['url' => 'favourite']) }}
    {{ Form::hidden('id', $profile['id']) }}

    @if(Auth::check())
    <button class="btn btn-primary tooltips favourite" id="follow-btn" type="submit">
        FAVOURITE
    </button>
    @else
        <button class="btn btn-primary tooltips favourite" id="follow-btn" type="button" data-toggle="modal" data-target="#modal-sign-in">
            FAVOURITE
        </button>
    @endif

    {{ Form::close() }}
@endif