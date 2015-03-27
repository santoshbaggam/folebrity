<div class="item text-center">
    <div class="item-image">
        <img src="{{ profile_pic }}">
    </div>
    <h3>
        <a href="santoshbaggam">{{ name }}</a>
    </h3>
    <p><a href="{{ handle }}">@{{ handle }}</a></p>
</div>

<div>
    <ul class="text-center compare">
        <li>TWEETS: {{ statistics.tweets }}</li>
        <li>FOLLOWING: {{ statistics.following }}</li>
        <li>FOLLOWERS: {{ statistics.followers }}</li>
        <li>India</li>
    </ul>
</div>