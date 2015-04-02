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
        <li><span>TWEETS:</span> {{ statistics.tweets }}</li>
        <li><span>FOLLOWING:</span> {{ statistics.following }}</li>
        <li><span>FOLLOWERS:</span> {{ statistics.followers }}</li>
        <li><span>Country:</span> India</li>
    </ul>
</div>