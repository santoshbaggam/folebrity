<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Folebrity | Follow your Celebrity</title>
    <meta name="description" content="">
    <meta name="author" content="Santosh Baggam">
    <link rel="shortcut icon" href="images/elements/favicon.ico" type="image/x-icon">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Style CSS + Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,400,400italic,300,300italic,700,700italic,900' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="css/swipebox.css"> -->
    {{ HTML::style('css/bootstrap.css') }}
    <link href="css/bootstrap.css" rel="stylesheet" >

    <link href="css/style.css" rel="stylesheet" >
</head>

<body class="background-model-1">

    @yield('content')

    <!-- FOOTER -->
    @include('partials/footer')
    <!-- END FOOTER -->

    @unless(Auth::check())
        <!-- modal-sign-in -->
        <div class="modal fade" id="modal-sign-in">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        @include('partials/sign-in')
                    </div>
                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    @endunless

    <!-- SCRIPTS -->
    @include('partials/scripts')
    <!-- END SCRIPTS -->

    @yield('scripts')

</body>
</html>