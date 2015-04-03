<div class="widget">
    <h3 class="widget-title">Recommendations</h3>
    <div class="recommendations">
        <ul>
        @foreach ($profiles as $profile)
            <li>
                <div class="item">
                    <a href="/{{ $profile['handle'] }}" class="item-image">
                        <img src="{{ $profile['profile_pic'] }}">
                    </a>
                    <h3>
                        <a href="/{{ $profile['handle'] }}">Pawan Kalyan</a>
                    </h3>
                    <p><a href="/{{ $profile['handle'] }}">@{{{ $profile['handle'] }}}</a></p>
                </div>
            </li>
        @endforeach
        </ul>
    </div>
</div>