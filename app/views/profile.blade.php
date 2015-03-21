@extends('layouts.main')

@section('content')

    <!-- HEADER -->
    @include('partials.header')
    <!-- END HEADER -->

    <div class="content padding-top-60">
        <!-- START CUSTOM -->
        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="widget">
                            <h3 class="widget-title">Insta Search</h3>
                            <form class="search-it">
                                <input type="submit" id="searchsubmit" value="" class="search-button">
                                <input type="text" name="s" id="s" class="search-line" placeholder="search">
                            </form>
                        </div>

                        <div class="widget">
                            <h3 class="widget-title">Filters</h3>

                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="sidebar main-content">
                        <div class="widget">
                            <h3 class="widget-title">Profile</h3>
                            <div class="profile">
                                <div class="icon">
                                    <div class="image">
                                        <img class="img-rounded" src="http://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg" width="100">
                                    </div>
                                    <div class="info">
                                        <h3 class="title">
                                            <a class="tooltips" href="https://twitter.com/intent/user?screen_name=urstrulyMahesh" title="" data-original-title="Follow on Twitter">
                                                Mahesh Babu
                                            </a>
                                        <span>
                                          <a class="tooltips" href="https://twitter.com/intent/user?screen_name=urstrulyMahesh" title="" data-original-title="Follow on Twitter">
                                              @urstrulyMahesh
                                              <img src="images/brand/twitter-bird-16x16.png">
                                          </a>
                                        </span>
                                        </h3>

                                        <form method="POST" action="http://twitter.dev/favorite">
                                            <input name="tweeter_id" type="hidden" value="2">
                                            <button class="btn btn-primary tooltips favorite" id="follow-btn" title="" type="submit" data-original-title="Follow on TollyTwits">
                                                Follow
                                            </button>
                                        </form>

                                    </div>
                                    <div class="stats">
                                        <ul>
                                            <li>
                                                <a href="https://twitter.com/urstrulyMahesh" target="_blank"><span class="count">805</span> Tweets</a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/urstrulyMahesh/following" target="_blank"><span class="count">1</span> Following</a>
                                            </li>
                                            <li class="last">
                                                <a href="https://twitter.com/urstrulyMahesh/followers" target="_blank"><span class="count">1113537</span> Followers</a>
                                            </li>
                                        </ul>
                                    </div><!-- stats -->

                                    <div class="body">
                                        <p>Actor in Indian Telugu Cinema</p>
                                        <p>Hyderabad, India | <a href="http://twitter.com/urstrulyMahesh" target="_blank">twitter.com/urstrulyMahesh</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="tweets-area">
                                <div class="tab-content">
                                    <ul>
                                        <li>
                                            <div class="tweet">
                                            <span class="tweet-image">
                                                <img alt="avatar image" src="http://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg" class="avatar" height="70" width="70">
                                            </span>
                                            <span class="tweet-info">
                                                <a href="#">Mahesh Babu</a>
                                                <span><a href="#">@ursTrulyMahesh<img src="images/brand/twitter-bird-16x16.png"></a></span>
                                                 <a class="tweet-reply-link" href="post.html#"><i class="icon-501" title="501"></i></a>
                                            </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur eveniet voluptate quidem <a href="#">@inventore</a> nihil modi nulla unde eligendi tempora dignissimos.</p>
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
                                        <li>
                                            <div class="tweet">
                                            <span class="tweet-image">
                                                <img alt="avatar image" src="http://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg" class="avatar" height="70" width="70">
                                            </span>
                                            <span class="tweet-info">
                                                <a href="#">Mahesh Babu</a>
                                                <span><a href="#">@ursTrulyMahesh<img src="images/brand/twitter-bird-16x16.png"></a></span>
                                                 <a class="tweet-reply-link" href="post.html#"><i class="icon-501" title="501"></i></a>
                                            </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti consequatur obcaecati sit recusandae quasi quas suscipit debitis? Ratione, inventore, ipsum!</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="widget">
                            <h3 class="widget-title">Activity</h3>
                            <div class="tabs-box">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="New">
                                        <div class="activity-body">
                                            <ul>
                                                <li>
                                                    <div class="item">
                                                        <a href="blog-left-sidebar.html#" class="item-image"><img src="http://teslathemes.com/demo/html/sevenfold/images/photos/lates-post-1.jpg" alt="mini"></a>
                                                        <h3><a href="blog-left-sidebar.html#">Laboratory of knowlege, just try for happiness.</a></h3>
                                                        <p>02 dec</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item">
                                                        <a href="blog-left-sidebar.html#" class="item-image"><img src="http://teslathemes.com/demo/html/sevenfold/images/photos/lates-post-2.jpg" alt="mini"></a>
                                                        <h3><a href="blog-left-sidebar.html#">Breand book. Colors of summer</a></h3>
                                                        <p>02 dec</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item">
                                                        <a href="blog-left-sidebar.html#" class="item-image"><img src="http://teslathemes.com/demo/html/sevenfold/images/photos/lates-post-3.jpg" alt="mini"></a>
                                                        <h3><a href="blog-left-sidebar.html#">Shopping card, buy something beautifull</a></h3>
                                                        <p>02 dec</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item">
                                                        <a href="blog-left-sidebar.html#" class="item-image"><img src="http://teslathemes.com/demo/html/sevenfold/images/photos/lates-post-3.jpg" alt="mini"></a>
                                                        <h3><a href="blog-left-sidebar.html#">Shopping card, buy something beautifull</a></h3>
                                                        <p>02 dec</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="widget-title">Ads</h3>

                            <div class="row">
                                <div class="each-ad col-xs-4 col-sm-12">
                                    <a href="#">
                                        <img class="img-responsive img-thumbnail" src="https://s.adroll.com/a/YHM/WOQ/YHMWOQECPNETDF5Q2IYTYO.jpg">
                                    </a>
                                    <div class="ad-tag">
                                        Ad
                                    </div>
                                </div>
                                <div class="each-ad col-xs-4 col-sm-12">
                                    <a href="#">
                                        <img class="img-responsive img-thumbnail" src="http://teslathemes.com/demo/html/sevenfold/images/photos/blog-1.jpg">
                                    </a>
                                    <div class="ad-tag">
                                        Ad
                                    </div>
                                </div>
                                <div class="each-ad col-xs-4 col-sm-12">
                                    <a href="#">
                                        <img class="img-responsive img-thumbnail" src="http://cdn.optmd.com/V2/PSA/4/runner2.gif">
                                    </a>
                                    <div class="ad-tag">
                                        Ad
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END CUSTOM -->

    </div>

@endsection