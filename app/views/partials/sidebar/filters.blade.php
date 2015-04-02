<div class="widget">
    <h3 class="widget-title">Filters</h3>
    
    <h6>Domains</h6>
    {{ Form::open(['url' => 'celebrities']) }}
    
    @foreach($domains as $domain)
        <div class="checkbox">
            <label>
                {{ Form::checkbox('domains[]', $domain->id) }}
                {{ $domain->name }}
            </label>
        </div>
    @endforeach
    
    <h6>Categories</h6>

    @foreach($categories as $category)
        <div class="checkbox">
            <label>
                {{ Form::checkbox('categories[]', $category->id) }}
                {{ $category->name }}
            </label>
        </div>
    @endforeach

    <h6>Gender</h6>
    <div class="checkbox">
        <label>
            {{ Form::checkbox('gender[]', 'Male') }}
            Male
        </label>
    </div>
    <div class="checkbox">
        <label>
            {{ Form::checkbox('gender[]', 'Female') }}
            Female
        </label>
    </div>
    

    {{ Form::submit('Apply', ['class' => 'btn btn-success btn-sm']) }}
    {{ Form::close() }}

</div>

@section('scripts')
    <script>
        var filters = {{ $domains->toJson() }};
    </script>
@stop
