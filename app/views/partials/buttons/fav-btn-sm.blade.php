@if(in_array($celebrity['id'], $favourites))
    {{ Form::open(['url' => 'unfavourite']) }}
    {{ Form::hidden('id', $celebrity['id']) }}
    <button class="btn btn-success btn-sm pull-right" id="unfollow-btn" type="submit">
        FAVOURITED
    </button>
    {{ Form::close() }}
@else
    {{ Form::open(['url' => 'favourite']) }}
    {{ Form::hidden('id', $celebrity['id']) }}

    @if(Auth::check())
        <button class="btn btn-primary btn-sm tooltips favourite pull-right" id="follow-btn" type="submit">
            FAVOURITE
        </button>
    @else
        <button class="btn btn-primary tooltips favourite" id="follow-btn" type="button" data-toggle="modal" data-target="#modal-sign-in">
            FAVOURITE
        </button>
    @endif

    {{ Form::close() }}
@endif