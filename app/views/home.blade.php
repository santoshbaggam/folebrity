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

                                @foreach($profiles as $profile)
                                <div class="widget-latest-post">
                                    <div class="widget-latest-post-cover">
                                        <a href="#">
                                            <img src="{{ $profile['profile_pic'] }}">
                                        </a>
                                    </div>
                                    <h4>
                                        <a href="#">{{ $profile['name'] }}</a>
                                        <a href="#"><span>@{{{ $profile['handle'] }}}</span></a>
                                    </h4>
                                    <span class="label label-info">{{ $profile['statistics.followers'] }} followers</span>
                                </div>
                                @endforeach

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