<h3 class="widget-title">Favourites</h3>
<div class="tab-content">
    <ul>
        @forelse($favourites as $favourite)
            <li>
                <button class="btn btn-success btn-sm pull-right">FAVOURITED</button>
                <div class="item">
                    <a href="/{{ $favourite['handle'] }}" class="item-image">
                        <img src="{{ $favourite['profile_pic'] }}">
                    </a>
                    <h3>
                        <a href="/{{ $favourite['handle'] }}">{{ $favourite['name'] }}</a>
                    </h3>
                    <p><a href="/{{ $favourite['handle'] }}">@{{{ $favourite['handle'] }}}</a></p>
                </div>
            </li>
        @empty
            <li>
                <div class="alert alert-warning">
                    You have <strong>0</strong> favourites. Checkout few <a href="/celebrities"><b>here..</b></a>
                </div>
            </li>
        @endforelse

    </ul>
</div>