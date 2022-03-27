@extends('layouts.app')

@section('content')
    <title>Healthify</title>
    <link href="homeStyles.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/responsiveslides.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {

            $("#slider1").responsiveSlides({
                maxwidth: 1600,
                speed: 600
            });
        });
    </script>
    
    </head>

    <body class="">





        <div class="header">
            <div class="wrap">
                <!--start-logo-->
                <div class="logo">
                    <a href="{{ route('home') }}" style="font-size: 30px;">Healthify</a>
                </div>
                <!--end-logo-->
                <!--start-top-nav-->
                <div class="top-nav">
                    <ul>
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>

                    </ul>
                </div>
                <div class="clear"> </div>
                <!--end-top-nav-->
            </div>
            <!--end-header-->
        </div>
        <div class="clear"> </div>
        <!--start-image-slider---->
        <div class="image-slider" style="display: flex;justify-content: center;">
            <!-- Slideshow 1 -->
            <ul class="rslides" id="slider1" style="width: 100vw">
                <li><img style="object-fit: cover; max-height: 70vh;"  src="{{ asset('images/slide_1.jpg') }}" alt=""></li>
                <li><img style="object-fit: cover; max-height: 70vh;" src="{{ asset('images/slide_2.jpg') }}" alt=""></li>
                <li><img style="object-fit: cover; max-height: 70vh;" src="{{ asset('images/slide_3.jpg') }}" alt=""></li>
            </ul>
            <!-- Slideshow 2 -->
        </div>
        <!--End-image-slider---->
        <div class="clear"> </div>
        <div class="content-grids">
            <div class="wrap">
                <div class="section group" style="display: flex;justify-content: center;">


                    <div class="listview_1_of_3 images_1_of_3">
                        <div class="listimg listimg_1_of_2">
                            <img src="images/grid-img3.png">
                        </div>
                        <div class="text list_1_of_2">
                            <h3>Patients</h3>
                        
                            <div class="button"><span><a href="{{ route('login') }}">Click Here</a></span></div>
                        </div>
                    </div>

                    <div class="listview_1_of_3 images_1_of_3">
                        <div class="listimg listimg_1_of_2">
                            <img src="images/grid-img1.png">
                        </div>
                        <div class="text list_1_of_2">
                            <h3>Doctors Login</h3>

                            <div class="button"><span><a href="{{ route('login') }}">Click Here</a></span></div>
                        </div>
                    </div>


                    <div class="listview_1_of_3 images_1_of_3">
                        <div class="listimg listimg_1_of_2">
                            <img src="images/grid-img2.png">
                        </div>
                        <div class="text list_1_of_2">
                            <h3>Admin Login</h3>

                            <div class="button"><span><a href="{{ route('login') }}">Click Here</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap">
            <div class="content-box">
                <div class="section group" style="display: flex;justify-content: center;">
                    <div class="col_1_of_3 span_1_of_3 frist">

                    </div>
                    <div class="col_1_of_3 span_1_of_3 second">

                    </div>
                    <div class="col_1_of_3 span_1_of_3 frist">


                    </div>
                </div>
            </div>
        </div>
        <div class="clear"> </div>
    @endsection
