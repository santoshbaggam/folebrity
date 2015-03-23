<div class="tweets-area">
    <div class="tab-content">
        <ul>
            @foreach ($tweets as $tweet)
            <li>

                <div class="tweet">
                    <span class="tweet-image">
                        <img alt="avatar image" src="{{ $tweet->user['profile_pic'] }}" class="avatar" height="70" width="70">
                    </span>
                    <span class="tweet-info">
                        <a href="#">{{ $tweet->user['name'] }}</a>
                        <span>
                            <a href="#">@{{{ $tweet->user['handle'] }}}<img src="images/brand/twitter-bird-16x16.png"></a>
                        </span>
                        <a class="tweet-reply-link" target="_blank" href="https://twitter.com/{{$tweet->user['handle']}}/status/{{$tweet->id}}">
                            <i class="icon-501" title="501"></i>
                        </a>
                    </span>
                    <p>{{ Twitter::linkify($tweet->tweet) }}</p>
                    <p>
                        <small>Retweeted by Santosh</small>
                    </p>
                    <p class="time">
                        <small><a href="#" data-toggle="tooltip" class="tooltips" title="" data-original-title="2014-12-16 16:08:44">
                                2 months ago
                            </a></small>

                        <span class="pull-right actions">
                            <a class="tooltips reply" title="" href="#" data-original-title="Reply">reply</a>
                            <a class="tooltips retweet" title="" href="#" data-original-title="Retweet">retweet</a>
                            <a class="tooltips favorite" title="" href="#" data-original-title="Favorite">favourite</a>
                        </span>
                    </p>
                </div>

            </li>
            @endforeach
        </ul>
    </div>
</div>