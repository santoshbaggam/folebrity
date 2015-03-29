<div class="tweets-area">
    <div class="tab-content">
        <ul>
            @foreach ($tweets as $tweet)
            <li id="{{$tweet['id']}}">

                <div class="tweet">
                    <span class="tweet-image">
                        <img alt="avatar image" src="{{ $tweet['user']['profile_pic'] }}" class="avatar" height="70" width="70">
                    </span>
                    <span class="tweet-info">
                        <a href="https://twitter.com/intent/user?screen_name={{$profile['handle']}}">{{ $tweet['user']['name'] }}</a>
                        <span>
                            <a href="https://twitter.com/intent/user?screen_name={{$profile['handle']}}">@{{{ $tweet['user']['handle'] }}}<img src="images/brand/twitter-bird-16x16.png"></a>
                        </span>
                        <a class="tweet-reply-link" target="_blank" href="https://twitter.com/{{$tweet['user']['handle']}}/status/{{$tweet['id']}}">
                            <i class="icon-501" title="501"></i>
                        </a>
                    </span>
                    <p>{{ Twitter::linkify($tweet['tweet']) }}</p>
                    <p>
                        {{--<small>Retweeted by Santosh</small>--}}
                    </p>
                    <p class="time">
                        <small>
                            {{ getTimeLink($tweet['time'], $tweet['id']) }}
                        </small>

                        <span class="pull-right actions">
                            <a class="tooltips reply" href="https://twitter.com/intent/tweet?in_reply_to={{ $tweet['id'] }}" data-original-title="Reply">
                                {{--<img src="images/brand/actions/reply.png">--}}
                            </a>
                            <a class="tooltips retweet" href="https://twitter.com/intent/tweet?in_reply_to={{ $tweet['id'] }}" data-original-title="Retweet">
                                {{--<img src="images/brand/actions/retweet.png">--}}
                            </a>
                            <a class="tooltips favourite" href="https://twitter.com/intent/tweet?in_reply_to={{ $tweet['id'] }}" data-original-title="Favorite">
                                {{--<img src="images/brand/actions/favourite.png">--}}
                            </a>
                        </span>
                    </p>
                </div>

            </li>
            @endforeach
        </ul>
    </div>
</div>