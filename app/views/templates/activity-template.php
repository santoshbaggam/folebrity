<li>
    <div class="item">
        <a href="/{{ tweet.user.handle }}#{{ tweet.id }}" class="item-image"><img src="{{ tweet.user.profile_pic }}"></a>
        <h3><a href="/{{ tweet.user.handle }}#{{ tweet.id }}">{{ tweet.tweet }}</a></h3>
        <p>{{ tweet.time }}</p>
    </div>
</li>