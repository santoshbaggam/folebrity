<h3 class="widget-title">Profile</h3>
<div class="profile">
    <div class="icon">
        <div class="image">
            <img class="img-rounded" src="{{$profile->profile_pic}}" width="100">
        </div>
        <div class="info">
            <h3 class="title">
                <a class="tooltips" href="https://twitter.com/intent/user?screen_name={{$profile->handle}}" title="{{$profile->handle}}">
                    {{$profile->name}}
                </a>
                <span>
                    <a class="tooltips" href="https://twitter.com/intent/user?screen_name={{$profile->handle}}" title="{{$profile->handle}}">
                        @{{{$profile->handle}}}
                        <img src="images/brand/twitter-bird-16x16.png">
                    </a>
                </span>
            </h3>

            <form method="POST" action="/favourite">
                <input name="tweeter_id" type="hidden" value="{{$profile->id}}">
                <button class="btn btn-primary tooltips favorite" id="follow-btn" type="submit">
                    Follow
                </button>
            </form>

        </div>
        <div class="stats">
            <ul>
                <li>
                    <a href="https://twitter.com/{{$profile->handle}}" target="_blank">
                        <span class="count">{{$profile->statistics['tweets']}}</span> Tweets</a>
                </li>
                <li>
                    <a href="https://twitter.com/{{$profile->handle}}/following" target="_blank">
                        <span class="count">{{$profile->statistics['following']}}</span> Following</a>
                </li>
                <li class="last">
                    <a href="https://twitter.com/{{$profile->handle}}/followers" target="_blank">
                        <span class="count">{{$profile->statistics['followers']}}</span> Followers</a>
                </li>
            </ul>
        </div><!-- stats -->

        <div class="body">
            <p>{{ $profile->description['about'] }}</p>
            <p>Hyderabad, India | <a href="http://{{$profile->description['url']}}" target="_blank">{{$profile->description['url']}}</a></p>
        </div>
    </div>
</div>