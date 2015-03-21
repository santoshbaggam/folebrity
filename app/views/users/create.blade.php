@extends('layouts.main')

@section('content')

    <!-- HEADER -->
    @include('partials.header')
    <!-- END HEADER -->

    <div id="homepage">

        <div class="content">
            <div class="container padding-top-60">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">SIGN UP! It's damn simple!</h3>
                            </div>
                            <div class="panel-body">
                                @include('partials.sign-up')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION SIGN UP -->
            @include('partials.home.section-sign-up')
            <!-- END SECTION SIGN UP ->

            <!-- SECTION DOMAINS -->
            @include('partials.home.section-domains')
            <!-- END SECTION DOMAINS -->
        </div>

    </div>

@stop