<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Falebrity</title>
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

    <!-- SCRIPTS -->
    @include('partials/scripts')
    <!-- END SCRIPTS -->

</body>
</html>