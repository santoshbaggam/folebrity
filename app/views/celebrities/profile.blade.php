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
                        @include('partials.sidebar.insta-search')
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="sidebar main-content">
                        <div class="widget profile">
                            @include('partials.profile.profile')

                            @include('partials.profile.tweets')
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="sidebar">
                        @include('partials.sidebar.activity')

                        @include('partials.sidebar.ads')
                    </div>
                </div>
            </div>

        </div>
        <!-- END CUSTOM -->

    </div>

@endsection