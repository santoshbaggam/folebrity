<div class="widget">
    <h3 class="widget-title">Filters</h3>

    {{ Form::open() }}

    @foreach($domains->toArray() as $domain)
        <div class="checkbox">
            <label>
                <input type="checkbox" value="{{$domain['id']}}"> {{$domain['name']}}
            </label>
        </div>
    @endforeach

    {{ Form::submit('Apply', ['class' => 'btn btn-success btn-sm']) }}
    {{ Form::close() }}

</div>

@section('scripts')
    <script>
        var filters = {{ $domains->toJson() }};
    </script>
@stop
