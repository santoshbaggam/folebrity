@extends('layouts.main')

@section('content')

    <div id="homepage">
        <!-- HEADER -->
        @include('partials.header')
        <!-- END HEADER -->

        <!-- CONTENT -->
        <div class="content">
            <!-- CUSTOM -->
            <div class="custom-type-1">
                <div class="container">

                    <div class="jumbotron">
                        <div class="container text-center">
                            <h1>FOLLOW YOUR CELEBRITIES, <br>ALL @ ONE PLACE!</h1>
                            <p>Your favourite Celebrities on Twitter, all at <span>one</span> place. Stay up to date with their tweets <span>actively</span>.<br>
                                Follow <span>genuine</span> and well <span>categorized</span> accounts on the go.</p>
                            <p>Search through to make Twitter easy and fun!</p>
                            <div class="insta-search center-block">
                                <form class="search-it" action="celebrities/q" method="post">
                                    <input type="submit" id="searchsubmit" value="" class="search-button">
                                    <input type="text" tabindex="1" id="s" class="insta-search typeahead" placeholder="search..">
                                    <input type="hidden" class="hidden-q" name="q">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END CUSTOM -->

            <!-- SKILLS -->
            <div class="skills-c">
                <div class="container">
                    <div class="skills-c-title">
                        <h1>What's <span style="color:#c62955">Folebrity</span>?</h1>
                        <p>It's clear and simple! "<span style="color:#c62955">Fo</span>llow your Ce<span style="color:#c62955">lebrity</span>". Not just one, all!<br>
                            All at one place and here's all unique about Folebrity,
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="skills-c-skill">
                                <div class="skills-c-skill-cover"><span>X</span></div>
                                <h3>GET TWEETS INSTANTLY!</h3>
                                <p>Receive and get notified with the tweets instantly. No matter how speed is your internet, receive realtime tweets, at lightning fast.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skills-c-skill">
                                <div class="skills-c-skill-cover"><span>Y</span></div>
                                <h3>FACEBOOK LIKE ACTIVITY FEED</h3>
                                <p>Want Facebook like Feed updates? Here you go.. We've got realtime Tweets Feed! Yes, you read it right and we're sure, you gonna love it!</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="skills-c-skill">
                                <div class="skills-c-skill-cover"><span>Z</span></div>
                                <h3>CATEGORIZED CELEBRITIES</h3>
                                <p>All Celebs are categorized as Heroes, Batsmen, Directors, etc. With Insta-Search, finding your favorite star is even more simple and easy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SKILLS -->

            <!-- PROJECTS -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 top">
                        <div class="widget">
                            <h2>Top Favourites</h2>
                                <hr>

                                <div class="widget-latest-post">
                                    <div class="widget-latest-post-cover">
                                        <a href="#">
                                            <img src="https://pbs.twimg.com/profile_images/3616582736/b5304e6f01f84d9c1142b0785a79d01d_400x400.jpeg">
                                        </a>
                                    </div>
                                    <h4>
                                        <a href="#">shruti haasan</a>
                                        <a href="#"><span>@shrutihaasan</span></a>
                                    </h4>
                                    <span class="label label-info">2095729 followers</span>
                                </div>

                                <div class="widget-latest-post">
                                    <div class="widget-latest-post-cover">
                                        <a href="#">
                                            <img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg">
                                        </a>
                                    </div>
                                    <h4>
                                        <a href="#">Mahesh Babu</a>
                                        <a href="#"><span>@urstrulyMahesh</span></a>
                                    </h4>
                                    <span class="label label-info">1170380 followers</span>
                                </div>

                                <div class="widget-latest-post">
                                    <div class="widget-latest-post-cover">
                                        <a href="#">
                                            <img src="https://pbs.twimg.com/profile_images/2683825159/e4442ddd1cba6ef6fb79a369293337cb_400x400.jpeg">
                                        </a>
                                    </div>
                                    <h4>
                                        <a href="#">Samantha Ruth Prabhu</a>
                                        <a href="#"><span>@Samanthaprabhu2</span></a>
                                    </h4>
                                    <span class="label label-info">1150326 followers</span>
                                </div>

                                <div class="widget-latest-post">
                                    <div class="widget-latest-post-cover">
                                        <a href="#">
                                            <img src="https://pbs.twimg.com/profile_images/470523672566829056/Fl38mfdK_400x400.jpeg">
                                        </a>
                                    </div>
                                    <h4>
                                        <a href="#">rajamouli ss</a>
                                        <a href="#"><span>@ssrajamouli</span></a>
                                    </h4>
                                    <span class="label label-info">1063021 followers</span>
                                </div>

                                <div class="widget-latest-post">
                                    <div class="widget-latest-post-cover">
                                        <a href="#">
                                            <img src="https://pbs.twimg.com/profile_images/552306096774197248/Xf9L6YF0_400x400.jpeg">
                                        </a>
                                    </div>
                                    <h4>
                                        <a href="#">Pawan Kalyan</a>
                                        <a href="#"><span>@PawanKalyan</span></a>
                                    </h4>
                                    <span class="label label-info">297458 followers</span>
                                </div>

                                <div class="widget-latest-post">
                                    <div class="widget-latest-post-cover">
                                        <a href="#">
                                            <img src="https://pbs.twimg.com/profile_images/521604547832082432/WjmBg2N0_400x400.jpeg">
                                        </a>
                                    </div>
                                    <h4>
                                        <a href="#">nithiin</a>
                                        <a href="#"><span>@actor_nithiin</span></a>
                                    </h4>
                                    <span class="label label-info">409249 followers</span>
                                </div>

                        </div>
                    </div>
                    <div class="col-sm-4">
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
            <!-- END PROJECTS -->

            <!-- SECTION SIGN UP -->
            @include('partials.home.section-sign-up')
            <!-- END SECTION SIGN UP ->

            <!-- SECTION DOMAINS -->
            @include('partials.home.section-domains')
            <!-- END SECTION DOMAINS -->

        </div>
        <!-- END CONTENT -->

    </div>

@stop