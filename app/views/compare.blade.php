@extends('layouts.main')

@section('content')

    <!-- HEADER -->
    @include('partials.header')
    <!-- END HEADER -->

    <div class="content padding-top-60">
        <!-- START CUSTOM -->
        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <div class="sidebar main-content">
                        <div class="widget">
                            @include('partials.compare')
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

@stop