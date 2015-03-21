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
                            <form name="filter-name">
                                <ul class="ul-type-filter">
                                    <li>
                                        <input type="checkbox" name="category[]">
                                        Heroes
                                    </li>
                                    <li>
                                        <input type="checkbox" name="category[]">
                                        Heroines
                                    </li>
                                    <li>
                                        <input type="checkbox" name="category[]">
                                        Villains
                                    </li>
                                    <li>
                                        <button class="btn btn-success btn-xs">
                                            Apply
                                        </button>
                                    </li>
                                </ul>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="sidebar main-content">
                        <div class="widget">
                            <h3 class="widget-title">Celebrities</h3>
                            <div class="tab-content">
                                <ul>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/3616582736/b5304e6f01f84d9c1142b0785a79d01d_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">shruti haasan</a>
                                            </h3>
                                            <p><a href="#">@shrutihaasan</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">Mahesh Babu</a>
                                            </h3>
                                            <p><a href="#">@urstrulyMahesh</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">Mahesh Babu</a>
                                            </h3>
                                            <p><a href="#">@urstrulyMahesh</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">Mahesh Babu</a>
                                            </h3>
                                            <p><a href="#">@urstrulyMahesh</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">Mahesh Babu</a>
                                            </h3>
                                            <p><a href="#">@urstrulyMahesh</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">Mahesh Babu</a>
                                            </h3>
                                            <p><a href="#">@urstrulyMahesh</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">Mahesh Babu</a>
                                            </h3>
                                            <p><a href="#">@urstrulyMahesh</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">Mahesh Babu</a>
                                            </h3>
                                            <p><a href="#">@urstrulyMahesh</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">Mahesh Babu</a>
                                            </h3>
                                            <p><a href="#">@urstrulyMahesh</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">Mahesh Babu</a>
                                            </h3>
                                            <p><a href="#">@urstrulyMahesh</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">Mahesh Babu</a>
                                            </h3>
                                            <p><a href="#">@urstrulyMahesh</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="btn btn-primary btn-sm pull-right">Follow</button>
                                        <div class="item">
                                            <a href="#" class="item-image"><img src="https://pbs.twimg.com/profile_images/511568227877392385/35tyf2WD_400x400.jpeg"></a>
                                            <h3>
                                                <a href="#">Mahesh Babu</a>
                                            </h3>
                                            <p><a href="#">@urstrulyMahesh</a></p>
                                        </div>
                                    </li>

                                </ul>
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