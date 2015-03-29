<div class="widget">
    <h3 class="widget-title">Activity</h3>
    <div class="tabs-box">
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="New">
                <div class="activity-body">
                    <ul class="insta-list">

                        <script id="activity-template" type="text/x-handlebars-template">
                            @include('templates.activity-template')
                        </script>

                        {{--get the last 5 tweets from global--}}
                        @foreach($tweets as $tweet)
                            <li>
                                <div class="item">
                                    <a href="#" class="item-image"><img src="{{ $tweet['user.profile_pic'] }}"></a>
                                    <h3><a href="#">{{ $tweet['tweet'] }}</a></h3>
                                    <p>{{ $tweet['time'] }}</p>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>