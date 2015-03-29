<div class="header-model-1">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="header-logo">
                    <a href="/">
                        <img src="images/logo.png">
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="menu">
                    <div class="responsive-menu">Menu</div>
                    <ul>
                        @if (Auth::check())
                            <li><a href="favourites">Favourites</a></li>
                        @else
                            <li><a href="/">Home</a></li>
                        @endif
                        <li><a href="#">Domains</a>
                            <ul>
                                <li><a href="#">Bollywood</a></li>
                                <li><a href="#">Tollywood</a></li>
                                <li><a href="#">Kollywood</a></li>
                                <li><a href="#">Cricket</a></li>
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Tennis</a></li>
                            </ul>
                        </li>
                        <li><a href="compare">Compare</a></li>

                        @if (Auth::check())
                            <li><a href="logout">Sign out</a></li>
                        @else
                            <li class="active"><a href="twitter/login">Sign in with Twitter</a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>