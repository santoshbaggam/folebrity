<h3 class="widget-title">Favourites</h3>
<div class="tab-content">
    <ul>
        @forelse($celebrities as $celebrity)
        <li>
            @include('partials.buttons.fav-btn-sm')

            <div class="item">
                <a href="/{{ $celebrity['handle'] }}" class="item-image">
                    <img src="{{ $celebrity['profile_pic'] }}">
                </a>
                <h3>
                    <a href="/{{ $celebrity['handle'] }}">{{ $celebrity['name'] }}</a>
                </h3>
                <p><a href="/{{ $celebrity['handle'] }}">@{{{ $celebrity['handle'] }}}</a></p>
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