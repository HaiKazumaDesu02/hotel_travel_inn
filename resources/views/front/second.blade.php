<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Travel Inn</title>
    <meta name="description"
        content="Pokhara Lakeside accommodation. Hotel in Pokhara Lakeside. Hotel near street 15 Pokhara">
    <meta name="author" content="">

    <!-- Bootstrap -->
    <link href=" {{ asset('build/assets/second/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"
        rel="stylesheet">

    <!-- Bootstrap 3 Date Picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link
        href="{{ asset('build/assets/second/bower_components/bootstrap-3-datepicker/dist/css/bootstrap-datepicker.min.css') }}"
        rel='stylesheet' type='text/css'>

    <!-- Google Open Sans Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link href=" {{ asset('build/assets/second/bower_components/font-awesome/css/font-awesome.min.css') }}"
        rel='stylesheet' type='text/css'>

    <!-- Animate Css -->
    <link href="{{ asset('build/assets/second/bower_components/animate.css/animate.min.css') }}" type='text/css'
        rel='stylesheet'>

    <!-- Simple Line Icons -->
    <link href=" {{ asset('build/assets/second/bower_components/simple-line-icons/css/simple-line-icons.css') }}"
        rel='stylesheet' type='text/css'>


    <!-- Theme Style -->
    <link rel="stylesheet" href=" {{ asset('build/assets/second/css/styles.css') }}">
    <link rel="stylesheet" href=" {{ asset('build/assets/second/css/colors.css') }}">
    <link rel="stylesheet" href=" {{ asset('build/assets/second/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <!-- Available main styles: styles-blue.css, styles-green.css, styles-orange.css, styles-pink.css,
    styles-violet.css, styles-gray.css-->

    <style>
        form .website_hp {
            display: none;
        }
    </style>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">

</head>

<body>
    <div id="page-top"></div>
    <section class="top-navbar container navbar-fixed-top">
        <nav class="navbar navbar-default" id="navigation-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div style="position: relative">
                        <div style="width: 30rem; position: absolute !important; bottom:82px; left:-50px;">

                            <a class="navbar-brand scroll-to" href="#page-top" style="">
                                <img src="{{ asset('build/assets/second/img/my_img/navbar-logo.png') }}"
                                    class="img-responsive" style="" alt="Accommodation Landing Page" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!-- Nav-Links start -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="scroll-to" href="#sc-rooms">Rooms & Facilities</a></li>
                        <li><a class="scroll-to" href="#sc-attractions">Things to Do</a></li>
                        <li><a class="scroll-to" href="#sc-rates">Rates & Bookings</a></li>
                        <li><a class="scroll-to" href="#sc-gallery">Gallery</a></li>
                        <li><a class="scroll-to" href="#sc-contact">Contact</a></li>
                    </ul>
                    <!-- Nav-Links end -->
                </div>
            </div>
        </nav>
    </section>
    <!--Navigation Top end-->

    <!--Teaser Slider start-->
    <section class="teaser-slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false"
            data-interval="5000">
            <div class="carousel-inner" role="listbox">
                <!--Slider Items start-->
                <div class="item active">
                    <img src=" {{ asset('build/assets/second/img/my_img/' . $landings[0]->image_url) }}"
                        alt="The Sea Villa">

                    <div class="carousel-caption">Describe the Image for SEO 1</div>
                </div>
                <div class="item">
                    <img src=" {{ asset('build/assets/second/img/my_img/' . $landings[1]->image_url) }}"
                        alt="The Sea Villa">

                    <div class="carousel-caption">Describe the Image for SEO 2</div>
                </div>
                <!--Slider Items end-->
            </div>
            <!-- Controls start -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- Controls end -->
        </div>
    </section>
    <div class="teaser-slider-ph"></div>
    <!--Teaser Slider end-->

    <!--Start content before Slider-->
    <div class="content-after-slider">

        <!--Call to Action start-->
        <section class="call-to-action container" id="sc-call-to-action">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="call-to-action-box text-center">
                        <div class="call-to-action-triangle"></div>
                        <button class="btn btn-color1 call-to-action-button show-inquiry-modal">
                            <i class="icon-calendar icons"></i> Check Availablility
                        </button>
                        <a class="call-to-action-phone"
                            href="tel:{{ $booking[0]->phone }}">{{ $booking[0]->phone }}</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Call to Action end-->

        <!--Features start-->
        <section class="features" id="sc-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>You'll love all the amenities we offer!</h2>
                    </div>
                </div>
                <div class="row">
                    <!--Feature 1 start-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="icon-speedometer"></i>
                            </div>
                            <h3>Wi-Fi</h3>

                            <p>Experience uninterrupted free WiFi throughout your stay, staying seamlessly
                                connected.
                            </p>
                        </div>
                    </div>
                    <!--Feature 1 end-->

                    <!--Feature 2 start-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="icon-cup"></i>
                            </div>
                            <h3>Restaurant</h3>

                            <p>
                                Experience delectable flavors and impeccable service in a cozy and inviting atmosphere.
                            </p>
                        </div>
                    </div>
                    <!--Feature 2 end-->

                    <!--Feature 3 start-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="icon-map"></i>
                            </div>
                            <h3>Ideal Location</h3>
                            <p>Experience the best of Lakeside, Pokhara at our hotel, where location meets perfection.
                            </p>
                        </div>
                    </div>
                    <!--Feature 3 end-->

                    <!--Feature 4 start-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="icon-info"></i>
                            </div>
                            <h3>Free Information</h3>

                            <p>Access free information about trekking and local attractions during your stay with us.
                            </p>
                        </div>
                    </div>
                    <!--Feature 4 end-->
                </div>
            </div>
        </section>
        <!--Features end-->

        <!--Room Tabs start-->
        <section class="room-tabs" id="sc-rooms">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Rooms and Facilities</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="row room-tabs-info">
                            <div class="div col-md-6">
                                <img src=" {{ asset('build/assets/second/img/my_img/booking.png') }}"
                                    alt="Tripadvisor" class=""/ style="padding-right:20px;">

                                <p style=" font-size:1.5rem">
                                    Welcome to our comfortable hotel in the heart of Lakeside Pokhara. Enjoy a
                                    hassle-free stay with essential amenities including complimentary Wi-Fi and ample
                                    parking. Our Deluxe rooms offer air conditioning for a pleasant environment.</p>
                            </div>
                            <div class="div col-md-6">
                                <p style="font-size:1.5rem">
                                    Our hotel is centrally located, offering easy access to Pokhara's major attractions.
                                    Explore vibrant local markets, charming cafes, and delightful Nepalese restaurants,
                                    all just a short stroll away. Don't miss the breathtaking views of the Himalayan
                                    mountains and the tranquil Phewa Lake, both within reach.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!--Room Tabs Nav start -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#object4" aria-controls="object4"
                                    role="tab" data-toggle="tab">Deluxe Couple Bed</a></li>
                            <li role="presentation" class=""><a href="#object1" aria-controls="object1"
                                    role="tab" data-toggle="tab">Couple Bed</a></li>
                            <li role="presentation"><a href="#object2" aria-controls="object2" role="tab"
                                    data-toggle="tab">Twin Bed</a></li>
                            <li role="presentation"><a href="#object3" aria-controls="object3" role="tab"
                                    data-toggle="tab">Triple Bed</a></li>

                        </ul>
                        <!--Room Tabs Nav end -->

                        <!-- Tabs start -->
                        <div class="tab-content">
                            <!--Room Tab 1 start-->
                            <div role="tabpanel" class="tab-pane fade " id="object1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="room-tabs-gallery">
                                            {{-- {{$coupleBeds[1]->image_url}} --}}
                                            <div class="room-tabs-gallery-thumbnails">

                                                <a class="room-tabs-gallery-thumb" href="#object1">
                                                    <img class="img-responsive"
                                                        src="{{ asset('build/assets/second/img/my_img/Couple Bed/' . $coupleBeds[0]->image_url) }} "
                                                        alt="Gallery Thumbnail" title="{{ $coupleBeds[0]->name }}" />
                                                </a>
                                            </div>
                                            <div class="room-tabs-gallery-image">
                                                <a class="room-tabs-gallery-preview-container" href="#">
                                                    <img class="img-responsive room-tabs-gallery-preview"
                                                        src="{{ asset('build/assets/second/img/my_img/Couple Bed/' . $coupleBeds[0]->image_url) }} "
                                                        alt="Image Preview" title="{{ $coupleBeds[0]->name }}" />
                                                </a>

                                                <div class="room-tabs-gallery-caption">
                                                    Starts from: <strong>Rs. {{ $rates[0]->rate }} / Night</strong>
                                                    <button class="btn btn-room-check show-inquiry-modal"
                                                        data-object="Couple Bed">
                                                        <i class="icon-calendar icons"></i> Check Availability
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 room-tabs-description" style="color:black">
                                        <h3>Couple Bed Room</h3>

                                        <p>Embrace the vibrant heart of Pokhara city at Hotel Travel Inn, where our room
                                            offers more than just a stunning mountain view and comfort. Stay connected
                                            with free WiFi while immersing yourself in the energy of the bustling
                                            lakeside street, located just 100m away.</p>

                                        <p>Indulge in the diverse culinary
                                            delights, explore lively clubs, and wander through bustling markets, all
                                            within easy reach from our prime location. Experience the perfect blend of
                                            convenience, excitement, and breathtaking views in our exceptional room at
                                            Hotel Travel Inn.</p>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <ul class="list-group room-tabs-checklist left">
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Couple
                                                        Bed</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Ceiling Fan</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Bathroom</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Stunning View</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Free WIFI</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <ul class="list-group room-tabs-checklist right">
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        100m from Lakeside Street</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Wardrobe for Clothes</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Room Tab 1 end-->

                            <!--Room Tab 2 start-->
                            <div role="tabpanel" class="tab-pane fade" id="object2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="room-tabs-gallery">
                                            <div class="room-tabs-gallery-thumbnails">
                                                <a class="room-tabs-gallery-thumb" href="#object2">
                                                    <img class="img-responsive"
                                                        src="{{ asset('build/assets/second/img/my_img/Twin Bed/' . $twinBeds[0]->image_url) }} "
                                                        alt="Gallery Thumbnail" title="{{ $twinBeds[0]->name }}" />
                                                </a>
                                                <a class="room-tabs-gallery-thumb" href="#object2">
                                                    <img class="img-responsive"
                                                        src="{{ asset('build/assets/second/img/my_img/Twin Bed/' . $twinBeds[1]->image_url) }} "
                                                        alt="Gallery Thumbnail" title="{{ $twinBeds[1]->name }}" />
                                                </a>
                                                <a class="room-tabs-gallery-thumb" href="#object2">
                                                    <img class="img-responsive"
                                                        src="{{ asset('build/assets/second/img/my_img/Twin Bed/' . $twinBeds[2]->image_url) }} "
                                                        alt="Gallery Thumbnail" title="{{ $twinBeds[2]->name }}" />
                                                </a>
                                            </div>
                                            <div class="room-tabs-gallery-image">
                                                <a class="room-tabs-gallery-preview-container" href="#">
                                                    <img class="img-responsive room-tabs-gallery-preview"
                                                        src="{{ asset('build/assets/second/img/my_img/Twin Bed/' . $twinBeds[0]->image_url) }} "
                                                        alt="Image Preview" title="{{ $twinBeds[0]->name }}" />
                                                </a>

                                                <div class="room-tabs-gallery-caption">
                                                    Starts from: <strong>Rs. {{ $rates[1]->rate }} / Night</strong>
                                                    <button class="btn btn-room-check show-inquiry-modal"
                                                        data-object="Twin Bed">
                                                        <i class="icon-calendar icons"></i> Check Availability
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 room-tabs-description" style="color:black">
                                        <h3>Twin Bed Room</h3>

                                        <p>Embrace the vibrant heart of Pokhara city at Hotel Travel Inn, where our room
                                            offers more than just a stunning mountain view and comfort. Stay connected
                                            with free WiFi while immersing yourself in the energy of the bustling
                                            lakeside street, located just 100m away.</p>

                                        <p>Indulge in the diverse culinary
                                            delights, explore lively clubs, and wander through bustling markets, all
                                            within easy reach from our prime location. Experience the perfect blend of
                                            convenience, excitement, and breathtaking views in our exceptional room at
                                            Hotel Travel Inn.</p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="list-group room-tabs-checklist">
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Couple
                                                        Bed</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Ceiling Fan</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Bathroom</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Stunning View</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Free WIFI</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-group room-tabs-checklist">
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        100m from Lakeside Street</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Wardrobe for Clothes</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Room Tab 2 end-->

                            <!--Room Tab 3 start-->
                            <div role="tabpanel" class="tab-pane fade" id="object3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="room-tabs-gallery">
                                            <div class="room-tabs-gallery-thumbnails">
                                                <a class="room-tabs-gallery-thumb" href="#object3">
                                                    <img class="img-responsive"
                                                        src="{{ asset('build/assets/second/img/my_img/Triple Bed/' . $tripleBeds[0]->image_url) }} "
                                                        alt="Gallery Thumbnail" title="{{ $tripleBeds[0]->name }}" />
                                                </a>
                                            </div>
                                            <div class="room-tabs-gallery-image">
                                                <a class="room-tabs-gallery-preview-container" href="#">
                                                    <img class="img-responsive room-tabs-gallery-preview"
                                                        src="{{ asset('build/assets/second/img/my_img/Triple Bed/' . $tripleBeds[0]->image_url) }} "
                                                        alt="Image Preview" title="{{ $tripleBeds[0]->name }}" />
                                                </a>

                                                <div class="room-tabs-gallery-caption">
                                                    Starts from: <strong>Rs. {{ $rates[2]->rate }} / Night</strong>
                                                    <button class="btn btn-room-check show-inquiry-modal"
                                                        data-object="Triple Bed">
                                                        <i class="icon-calendar icons"></i> Check Availability
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 room-tabs-description" style="color:black">
                                        <h3>Triple Bed Room</h3>

                                        <p>Embrace the vibrant heart of Pokhara city at Hotel Travel Inn, where our room
                                            offers more than just a stunning mountain view and comfort. Stay connected
                                            with free WiFi while immersing yourself in the energy of the bustling
                                            lakeside street, located just 100m away.</p>

                                        <p>Indulge in the diverse culinary
                                            delights, explore lively clubs, and wander through bustling markets, all
                                            within easy reach from our prime location. Experience the perfect blend of
                                            convenience, excitement, and breathtaking views in our exceptional room at
                                            Hotel Travel Inn.</p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="list-group room-tabs-checklist">
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Couple
                                                        Bed</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Ceiling Fan</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Bathroom</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Stunning View</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Free WIFI</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-group room-tabs-checklist">
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        100m from Lakeside Street</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Wardrobe for Clothes</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Room Tab 3 end-->

                            <!--Room Tab 4 start-->
                            <div role="tabpanel" class="tab-pane fade in active" id="object4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="room-tabs-gallery">
                                            <div class="room-tabs-gallery-thumbnails">
                                                <a class="room-tabs-gallery-thumb" href="#object4">
                                                    <img class="img-responsive"
                                                        src="{{ asset('build/assets/second/img/my_img/Deluxe Couple Bed/' . $deluxeCoupleBeds[0]->image_url) }} "
                                                        alt="Gallery Thumbnail"
                                                        title="{{ $deluxeCoupleBeds[0]->name }}" />
                                                </a>
                                                <a class="room-tabs-gallery-thumb" href="#object4">
                                                    <img class="img-responsive"
                                                        src="{{ asset('build/assets/second/img/my_img/Deluxe Couple Bed/' . $deluxeCoupleBeds[1]->image_url) }} "
                                                        alt="Gallery Thumbnail"
                                                        title="{{ $deluxeCoupleBeds[1]->name }}" />
                                                </a>
                                                <a class="room-tabs-gallery-thumb" href="#object4">
                                                    <img class="img-responsive"
                                                        src="{{ asset('build/assets/second/img/my_img/Deluxe Couple Bed/' . $deluxeCoupleBeds[2]->image_url) }} "
                                                        alt="Gallery Thumbnail"
                                                        title="{{ $deluxeCoupleBeds[2]->name }}" />
                                                </a>
                                                <a class="room-tabs-gallery-thumb" href="#object4">
                                                    <img class="img-responsive"
                                                        src="{{ asset('build/assets/second/img/my_img/Deluxe Couple Bed/' . $deluxeCoupleBeds[3]->image_url) }} "
                                                        alt="Gallery Thumbnail"
                                                        title="{{ $deluxeCoupleBeds[3]->name }}" />
                                                </a>
                                                <a class="room-tabs-gallery-thumb" href="#object4">
                                                    <img class="img-responsive"
                                                        src="{{ asset('build/assets/second/img/my_img/Deluxe Couple Bed/' . $deluxeCoupleBeds[4]->image_url) }} "
                                                        alt="Gallery Thumbnail"
                                                        title="{{ $deluxeCoupleBeds[4]->name }}" />
                                                </a>
                                                <a class="room-tabs-gallery-thumb" href="#object4">
                                                    <img class="img-responsive"
                                                        src="{{ asset('build/assets/second/img/my_img/Deluxe Couple Bed/' . $deluxeCoupleBeds[5]->image_url) }} "
                                                        alt="Gallery Thumbnail"
                                                        title="{{ $deluxeCoupleBeds[5]->name }}" />
                                                </a>
                                            </div>
                                            <div class="room-tabs-gallery-image">
                                                <a class="room-tabs-gallery-preview-container" href="#">
                                                    <img class="img-responsive room-tabs-gallery-preview"
                                                        src="{{ asset('build/assets/second/img/my_img/Deluxe Couple Bed/' . $deluxeCoupleBeds[0]->image_url) }} "
                                                        alt="Image Preview"
                                                        title="{{ $deluxeCoupleBeds[0]->name }}" />
                                                </a>
                                                <div class="room-tabs-gallery-caption">
                                                    Starts from: <strong>Rs. {{ $rates[3]->rate }}/ Night</strong>
                                                    <button class="btn btn-room-check show-inquiry-modal"
                                                        data-object="Deluxe Couple Bed">
                                                        <i class="icon-calendar icons"></i> Check Availability
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 room-tabs-description" style="color:black">
                                        <h3>Deluxe Couple Bed Room</h3>

                                        <p>Embrace the vibrant heart of Pokhara city at Hotel Travel Inn, where our room
                                            offers more than just a stunning mountain view and comfort. Stay connected
                                            with free WiFi while immersing yourself in the energy of the bustling
                                            lakeside street, located just 100m away.</p>

                                        <p>Indulge in the diverse culinary
                                            delights, explore lively clubs, and wander through bustling markets, all
                                            within easy reach from our prime location. Experience the perfect blend of
                                            convenience, excitement, and breathtaking views in our exceptional room at
                                            Hotel Travel Inn.</p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="list-group room-tabs-checklist">
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Couple
                                                        Bed</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Air Condtion</li>

                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Wardrobe for Clothes</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Stunning View</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Free WIFI</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-group room-tabs-checklist">
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Fridge</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Breakfast</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Bathroom with Hot Tub</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        Hair Blower</li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i>
                                                        100m from Lakeside Street</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Room Tab 4 end-->
                        </div>
                        <!-- Tabs end -->
                    </div>
                </div>
            </div>
        </section>
        <!--Room Tabs start-->

        <!--Location start-->
        <section class="location" id="sc-location">
            <div class="location-map-container" id="location-map">
                <iframe class="contact-frame"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.7658575310854!2d83.95763802825648!3d28.21031798444929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995951c1e17573d%3A0xc8dfb45ee0226f68!2sHotel%20Travel%20Inn!5e0!3m2!1sen!2sus!4v1687081635352!5m2!1sen!2sus"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="location-address text-center" style="">
                <address>Location <i class="icon-pointer"></i> Street-15, Lakeside, Pokhara</address>
            </div>
        </section>
        <!--Location end-->



        <!--Attractions start-->
        <section class="attractions" id="sc-attractions">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Things to do in Pokhara</h2>

                        <p>Pokhara, Nepal, nestled in the Himalayas, offers enchanting experiences. Explore the
                            Annapurna region with thrilling treks. Relax on Phewa Lake, surrounded by mountains. Marvel
                            at Davis Falls' captivating waterfall. Visit the spiritual World Peace Pagoda for panoramic
                            views. Try paragliding for an adrenaline rush. Witness stunning sunrises from Sarangkot.
                            Immerse in local culture at Bindhyabasini Temple. Pokhara is a haven of natural beauty and
                            adventure.<strong>You can book these activities with us!</strong></p>
                       
                            


                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        @if (!empty($youtube[0]->link))
                            <div class="attraction-video">
                                <div class="embed-responsive video embed-responsive-16by9">
                                    {!! $youtube[0]->link !!}
                                </div>
                                <!--Embed Video end-->
                            </div>
                        @endif
                        <!--Attraction Video end-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <!--Attraction link 1 start-->
                        <div class="attraction-link">
                            <a>
                                <div class="attraction-img">
                                    <img class="img-responsive" style="height:250px "
                                        src="{{ asset('build/assets/second/img/my_img/pokhara/fewa.jpg') }}"
                                        alt="Things to do" />
                                    <div class="attraction-overlay">
                                        <i class="icon-link"></i>
                                    </div>
                                </div>

                                <div class="attraction-caption">
                                    <div class="attraction-caption-title">Fewa Lake</div>
                                    <div class="attraction-distance">500 m</div>
                                </div>
                            </a>
                        </div>
                        <!--Attraction link 1 end-->
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <!--Attraction link 2 start-->
                                <div class="attraction-link">
                                    <a>
                                        <div class="attraction-img">
                                            <img class="img-responsive"
                                                src="{{ asset('build/assets/second/img/my_img/pokhara/raft.jpg') }}"
                                                alt="Things to do" />

                                            <div class="attraction-overlay">
                                                <i class="icon-link"></i>
                                            </div>
                                        </div>

                                        <div class="attraction-caption">
                                            <div class="attraction-caption-title">Rafting</div>
                                            <div class="attraction-distance">10.5 Km</div>
                                        </div>
                                    </a>
                                </div>
                                <!--Attraction link 2 end-->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!--Attraction link 3 start-->
                                <div class="attraction-link">
                                    <a>
                                        <div class="attraction-img">
                                            <img class="img-responsive"
                                                src="{{ asset('build/assets/second/img/my_img/pokhara/horse1.jpg') }}"
                                                alt="Things to do" />

                                            <div class="attraction-overlay">
                                                <i class="icon-link"></i>
                                            </div>
                                        </div>

                                        <div class="attraction-caption">
                                            <div class="attraction-caption-title">Horse Riding</div>
                                            <div class="attraction-distance">7.0 Km</div>
                                        </div>
                                    </a>
                                </div>
                                <!--Attraction link 3 end-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Attraction link 4 start-->
                        <div class="attraction-link">
                            <a>
                                <div class="attraction-img">
                                    <img class="img-responsive" style="height:510px"
                                        src="{{ asset('build/assets/second/img/my_img/pokhara/paragliding.jpg') }}"
                                        alt="Things to do" />

                                    <div class="attraction-overlay">
                                        <i class="icon-link"></i>
                                    </div>
                                </div>

                                <div class="attraction-caption">
                                    <div class="attraction-caption-title">Paragliding</div>
                                    <div class="attraction-distance">11 Km</div>
                                </div>
                            </a>
                        </div>
                        <!--Attraction link 4 end-->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Attraction link 5 start-->
                        <div class="attraction-link">
                            <a>
                                <div class="attraction-img">
                                    <img class="img-responsive" style="height:215px"
                                        src="{{ asset('build/assets/second/img/my_img/pokhara/balloon1.jpg') }}"
                                        alt="Things to do" />

                                    <div class="attraction-overlay">
                                        <i class="icon-link"></i>
                                    </div>
                                </div>

                                <div class="attraction-caption">
                                    <div class="attraction-caption-title">Hot Air Balloon</div>
                                    <div class="attraction-distance">11.5 Km</div>
                                </div>
                            </a>
                        </div>
                        <!--Attraction link 5 end-->
                        <!--Attraction link 6 start-->
                        <div class="attraction-link">
                            <a>
                                <div class="attraction-img">
                                    <img class="img-responsive"
                                        src="{{ asset('build/assets/second/img/my_img/pokhara/bungee.jpg') }}"
                                        alt="Things to do" />

                                    <div class="attraction-overlay">
                                        <i class="icon-link"></i>
                                    </div>
                                </div>

                                <div class="attraction-caption">
                                    <div class="attraction-caption-title">Bungee Jumping</div>
                                    <div class="attraction-distance">3.5 Km</div>
                                </div>
                            </a>
                        </div>
                        <!--Attraction link 6 end-->
                    </div>
                </div>
                <div class="text-center">
                    <p style="font-size: 16px; font-family: Arial, sans-serif; color: #333333;">
                        For an unforgettable experience, explore Peace Himalaya Treks & Travels Pvt. Ltd. 
                        <br>
                        <a href="https://www.tripadvisor.com/Attraction_Review-g293891-d13456537-Reviews-Peace_Himalaya_Treks_And_Travels_Pvt_Ltd-Pokhara_Gandaki_Zone_Western_Region.html"
                            target="_blank" style="text-decoration: none; color: #007BFF; font-weight: bold;">
                            <u>Discover more on TripAdvisor</u>
                        </a>.
                    </p>
                    <p style="font-size: 16px; font-family: Arial, sans-serif; color: #333333;">
                        Need a custom trek? We'll help you create a customized trekking experience!
                    </p>
                </div>
            </div>
        </section>
        <!--Attractions end-->

        <!--Newsletter start-->
        <section class="newsletter sc-animate" data-effect="fadeIn" id="sc-newsletter">
            <div class="container">
                <div class="newsletter-box sc-animate" data-effect="swing">
                    <div class="newsletter-box-icon"><i class="icon-envelope"></i></div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h3><span>Stay Conected!</span> Sign up for our newsletter and get first pick off discounts
                                and
                                more!</h3>
                        </div>

                        <form action="{{ route('email-store') }}" id="newsletter-form" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="alert hidden" id="newsletter-form-msg"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="Email-Address">
                                    </div>
                                </div>
                            </div>

                            <div class="newsletter-box-submit">
                                <div class="newsletter-box-button">
                                    <input type="submit" class="btn btn-color1 btn-block"
                                        value="Subscribe Newsletter" />
                                </div>
                                <div class="newsletter-box-socialmedia">
                                    <h4>Or follow us on:</h4>
                                    <ul>
                                        <li><a href="https://www.facebook.com/hoteltravelin" target="_blank"><i
                                                    class="fa fa-facebook fa-fw"></i></a></li>
                                        <li><a href="mailto:hoteltravelinn@gmail.com" target="_blank"><i
                                                    class="fa fa-envelope fa-fw"></i></a></li>
                                        <li><a href="https://www.tripadvisor.com/Attraction_Review-g293891-d13456537-Reviews-Peace_Himalaya_Treks_And_Travels_Pvt_Ltd-Pokhara_Gandaki_Zone_Western_Region.html"
                                                target="_blank"><i class="fa fa-tripadvisor fa-fw"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
        <!--Newsletter end-->

        <!--Reviews start-->
        <section class="reviews" id="sc-reviews">
            <div class="container">
                <div id="review-slider" class="carousel slide" data-ride="carousel">

                    <div class="row">
                        <div class="col-md-6">
                            <h2>This is what our guests think!</h2>
                        </div>
                        <div class="col-md-6 review-controls">
                            <!-- Controls -->
                            <a class="left carousel-control" href="#review-slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right carousel-control" href="#review-slider" role="button"
                                data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <!--Review Item start-->
                        <div class="item active">
                            <div class="row">
                                <!--Review Person start-->
                                <div class="col-md-6">
                                    <div class="review-box">
                                        <h3>"{{ $two_reviews[0]->title }}"</h3>

                                        <p>{{ $two_reviews[0]->review }}</p>

                                        <div class="review-person">
                                            <img class="review-person-image"
                                                src="{{ asset('build/assets/second/img/my_img/reviewers/' . $two_reviews[0]->image_url) }}"
                                                alt="Jahnatan Smith" />

                                            <div class="review-person-name">{{ $two_reviews[0]->name }}</div>
                                            <div class="review-person-location">
                                                <i class="icon-pointer"></i> form {{ $two_reviews[0]->city }},
                                                {{ $two_reviews[0]->country }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Review Person end-->

                                <!--Review Person start-->
                                <div class="col-md-6">
                                    <div class="review-box">
                                        <h3>“{{ $two_reviews[1]->title }}”</h3>

                                        <p>{{ $two_reviews[1]->review }}</p>

                                        <div class="review-person">
                                            <img class="review-person-image"
                                                src="{{ asset('build/assets/second/img/my_img/reviewers/' . $two_reviews[1]->image_url) }}"
                                                alt="Jahnatan Smith" />

                                            <div class="review-person-name">{{ $two_reviews[0]->name }}</div>
                                            <div class="review-person-location">
                                                <i class="icon-pointer"></i> form {{ $two_reviews[0]->city }},
                                                {{ $two_reviews[0]->country }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Review Person end-->
                            </div>
                        </div>
                        <!--Review Item end-->

                        <!--Review Item start-->

                        @php
                            $count = 0;
                        @endphp

                        @foreach ($reviews as $review)
                            @if ($review->id % 2 === 1)
                                @if ($count % 2 === 0)
                                    <div class="item">
                                        <div class="row">
                                @endif

                                <div class="col-md-6">
                                    <div class="review-box">
                                        <h3>“{{ $review->title }}”</h3>
                                        <p>{{ $review->review }}</p>
                                        <div class="review-person">
                                            <img class="review-person-image"
                                                src="{{ asset('build/assets/second/img/my_img/reviewers/' . $review->image_url) }}"
                                                alt="Jahnatan Smith" />
                                            <div class="review-person-name">{{ $review->name }}</div>
                                            <div class="review-person-location">
                                                <i class="icon-pointer"></i> from {{ $review->city }},
                                                {{ $review->country }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @php
                                    $count++;
                                @endphp

                                @if ($count % 2 === 0)
                    </div>
                </div>
                @endif
                @endif
                @endforeach

                @if ($count % 2 !== 0)
            </div>
    </div>
    @endif

    @php
        $oki = 0;
    @endphp
    @foreach ($reviews as $review)
        @if ($review->id % 2 === 0)
            @if ($oki % 2 === 0)
                <div class="item">
                    <div class="row">
            @endif

            <div class="col-md-6">
                <div class="review-box">
                    <h3>“{{ $review->title }}”</h3>
                    <p>{{ $review->review }}</p>
                    <div class="review-person">
                        <img class="review-person-image"
                            src="{{ asset('build/assets/second/img/my_img/reviewers/' . $review->image_url) }}"
                            alt="Jahnatan Smith" />
                        <div class="review-person-name">{{ $review->name }}</div>
                        <div class="review-person-location">
                            <i class="icon-pointer"></i> from {{ $review->city }}, {{ $review->country }}
                        </div>
                    </div>
                </div>
            </div>

            @php
                $oki++;
            @endphp

            @if ($oki % 2 === 0)
                </div>
                </div>
            @endif
        @endif
    @endforeach

    @if ($oki % 2 !== 0)
        </div>
        </div>
    @endif


    <!--Review Item end-->
    </div>


    </div>
    </div>
    </section>
    <!--Reviews end-->

    <!--About start-->
    <section class="about" id="sc-about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about-image">
                        <img src="{{ asset('build/assets/second/img/my_img/owner/' . $owner[0]->image_url) }}"
                            style="width: 360px; height:350px" alt="Owner Image" />
                    </div>
                </div>
                <div class="col-md-8">
                    <h2>About our {{ $owner[0]->name }}</h2>

                    <p>{{ $owner[0]->description }}</p>

                    {{-- <div class="about-signature">
                        <img src="img/about-signature.png" class="img-responsive" alt="Owner Signature"/>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--About end-->

    <!--Counter start-->
    <section class="counter" id="sc-counter">
        <div class="container">
            <div class="row">
                <!--Counter1 start-->
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box sc-animate" data-effect="fadeInDown">
                        <div class="counter-icon"><i class="icon-star"></i></div>
                        <div class="counter-number" data-value="{{ $statistics[0]->number }}">
                            {{ $statistics[0]->number }}</div>
                        <div class="counter-description">Five Star Ratings</div>
                    </div>
                </div>
                <!--Counter1 end-->

                <!--Counter2 start-->
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box sc-animate" data-effect="fadeInUp">
                        <div class="counter-icon"><i class="icon-globe"></i></div>
                        <div class="counter-number" data-value="{{ $statistics[1]->number }}">
                            {{ $statistics[1]->number }}</div>
                        <div class="counter-description">International guests</div>
                    </div>
                </div>
                <!--Counter2 end-->

                <!--Counter3 start-->
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box sc-animate" data-effect="fadeInDown">
                        <div class="counter-icon"><i class="icon-cup"></i></div>
                        <div class="counter-number" data-value="{{ $statistics[2]->number }}">
                            {{ $statistics[2]->number }}</div>
                        <div class="counter-description">Served Breakfast</div>
                    </div>
                </div>
                <!--Counter3 end-->

                <!--Counter4 start-->
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box sc-animate" data-effect="fadeInUp">
                        <div class="counter-icon"><i class="icon-heart"></i></div>
                        <div class="counter-number" data-value="{{ $statistics[3]->number }}">
                            {{ $statistics[3]->number }}</div>
                        <div class="counter-description">New Friendships</div>
                    </div>
                </div>
                <!--Counter4 end-->
            </div>
        </div>
    </section>
    <!--Counter end-->

    <!--Rates start-->
    <section class="rates" id="sc-rates">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Rates and Booking</h2>
                </div>
            </div>
            <div class="row">
                <!--Rate 1 start-->
                <div class="col-md-3 rate-box">
                    <div class="rate-icon">
                        <div class="stars">
                            <i class="fa fa-star"></i>
                        </div>
                        <i class="fa fa-bed"></i>
                    </div>
                    <div class="rate-description">Couple Bed</div>
                    <div class="rate-price">
                        <div class="rate-price-currency">Rs</div>
                        <div class="rate-price-amount">{{ $rates[0]->rate }}</div>
                        <div class="rate-price-duration">Night</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="rate-action">
                        <button class="btn show-inquiry-modal" data-object="Couple Bed">
                            <i class="icon-calendar icons"></i> Check Availability
                        </button>
                    </div>
                </div>
                <!--Rate 1 end-->

                <!--Rate 2 start-->
                <div class="col-md-3 rate-box highlight">
                    <div class="rate-icon">
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <i class="fa fa-bed"></i>
                    </div>
                    <div class="rate-description">Twin Bed</div>
                    <div class="rate-price">
                        <div class="rate-price-currency">Rs</div>
                        <div class="rate-price-amount">{{ $rates[1]->rate }}</div>
                        <div class="rate-price-duration">Night</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="rate-action">
                        <button class="btn show-inquiry-modal" data-object="Twin Bed">
                            <i class="icon-calendar icons"></i> Check Availability
                        </button>
                    </div>
                </div>
                <!--Rate 2 end-->

                <!--Rate 3 start-->
                <div class="col-md-3 rate-box">
                    <div class="rate-icon">
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <i class="fa fa-bed"></i>
                    </div>
                    <div class="rate-description">Triple Bed</div>
                    <div class="rate-price">
                        <div class="rate-price-currency">Rs</div>
                        <div class="rate-price-amount">{{ $rates[2]->rate }}</div>
                        <div class="rate-price-duration">Night</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="rate-action">
                        <button class="btn show-inquiry-modal" data-object="Triple Bed">
                            <i class="icon-calendar icons"></i> Check Availability
                        </button>
                    </div>
                </div>
                <!--Rate 3 end-->

                <!--Rate 4 start-->
                <div class="col-md-3 rate-box">
                    <div class="rate-icon">
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <i class="fa fa-bed"></i>
                    </div>
                    <div class="rate-description">Deluxe Couple Bed</div>
                    <div class="rate-price">
                        <div class="rate-price-currency">Rs</div>
                        <div class="rate-price-amount">{{ $rates[3]->rate }}</div>
                        <div class="rate-price-duration">Night</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="rate-action">
                        <button class="btn show-inquiry-modal" data-object="Deluxe Couple Bed">
                            <i class="icon-calendar icons"></i> Check Availability
                        </button>
                    </div>
                </div>
                <!--Rate 4 end-->
            </div>
            <div class="row">
                <div class="col-md-12 rates-payment-info">
                    <p>We accept debit and all major credit cards.</p>
                    <img src="{{ asset('build/assets/second/img/credit-cards.png') }}" alt="Credit Cards" />
                </div>
            </div>
        </div>
    </section>
    <!--Rates end-->

    <!--Services start-->
    <section class="services" id="sc-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>We offer a wide selection of services</h2>
                </div>
            </div>

            <div class="row service-row">
                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-car"></i></div>
                    <h3>Transportation</h3>

                    <p>From airport transfers to local sightseeing, we've got you covered. Sit back, relax, and let us
                        handle your travel needs.</p>
                </div>
                <!-- Service Item end -->

                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-paw"></i></div>
                    <h3>Restaurant</h3>

                    <p>Experience delectable flavors and impeccable service in a cozy and inviting atmosphere.</p>
                </div>
                <!-- Service Item end -->

                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-fire"></i></div>
                    <h3>BBQ</h3>

                    <p>Choose your meat and let us handle the marinating and preparation, so you can enjoy the cooking
                        and the moment.</p>
                </div>
                <!-- Service Item end -->

                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-soccer-ball-o"></i></div>
                    <h3>Parking</h3>

                    <p>
                        Convenient parking available, ensuring a hassle-free experience during your stay.</p>
                </div>
                <!-- Service Item end -->

                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-lock"></i></div>
                    <h3>Garden</h3>

                    <p>
                        Dine amidst nature's embrace in our charming garden, complete with a cozy swing for a
                        delightful.</p>
                </div>
                <!-- Service Item end -->

                <!-- Service Item start -->
                <div class="col-md-4 col-sm-6 service">
                    <div class="service-icon"><i class="fa fa-coffee"></i></div>
                    <h3>Trip Planner</h3>

                    <p>Embark on unforgettable trekking adventures with our expert guidance and planning services. </p>
                </div>
                <!-- Service Item end -->
            </div>

        </div>
    </section>
    <!--Services end-->
    <section id="sc-gallery">

        <div id="gallery_menu" class="gallery">
            <div class="mask">
                <div class="title_center light">
                    <div class="center_line light wow fadeInLeft"></div>
                    <p class="wow fadeIn">Gallery</p>
                </div>
                <div class="center_line light wow fadeInRight"></div>
                <div class="mini_gap"></div>
                <ul id="filterOptions">
                    <li class="active"><a href="#" class="all">All</a></li>
                    <li><a href="#" class="hotel">Hotel</a></li>
                    <li><a href="#" class="trek">Treks</a></li>
                    <li><a href="#" class="restaurant">Restaurant</a></li>
                    <li><a href="#" class="lake">Lake</a></li>
                    <li><a href="#" class="snapShots">Snapshots</a></li>
                </ul>
            </div>
        </div>
        <ul class="ourHolder">
            @foreach ($galleries as $gallery)
                <li class="item photo" data-id="id-{{ $gallery->id }}" data-type="{{ $gallery->data_type }}">
                    <figure class="parkhotel_img">
                        <a href="{{ asset('build/assets/second/gallery/' . $gallery->image_url) }}"
                            data-lightbox="image-gallery">
                            <img src="{{ asset('build/assets/second/gallery/' . $gallery->image_url) }}"
                                alt="img09" />
                            <figcaption>
                                <h2>{{ $gallery->first_word }} <span> {{ $gallery->second_word }}</span></h2>
                            </figcaption>
                        </a>
                    </figure>
                </li>
            @endforeach
        </ul>
    </section>

    <div class="gap-ok"></div>

        <!--Partner start-->
        <section class="partners" id="sc-partners">
            <div class="container partners-container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>In cooperation with:</h2>
                    </div>
                </div>
                <div class="row partner-logo" data-effect="fadeIn">
                    <div class="col-md-2 col-sm-4 partner">
                        <div class=""><img class="img-responsive" src="{{ asset('build/assets/second/img/my_img/trip.png') }}"
                                alt="Partner" /></div>
                    </div>
                    <div class="col-md-2 col-sm-4 partner">
                        <div class=""><img class="img-responsive" src="{{ asset('build/assets/second/img/my_img/taan.png') }}"
                                alt="Partner" /></div>
                    </div>
                    <div class="col-md-2 col-sm-4 partner">
                        <div class=""><img class="img-responsive" src="{{ asset('build/assets/second/img/my_img/booking.png') }}"
                                alt="Partner" /></div>
                    </div>
                </div>
            </div>
        </section> 
        <!--Partners end-->

        <!--Contact start-->
        <div class="gap"></div>

        <section class="contact" id="sc-contact">
            <div class="container" style="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Get in touch with Us</h2>

                                    <h3>If you have any questions feel free to contact us!</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-img">
                                        <img class="img-responsive"
                                            src=" {{ asset('build/assets/second/img/my_img/owner/' . $booking[0]->image_url) }}"
                                            alt="Contact Image" style="" />
                                    </div>
                                    <div class="contact-person">{{ $booking[0]->name }}</div>
                                    <div class="contact-title">Booking and Reservation</div>
                                    <div class="contact-phone"><i class="fa fa-mobile"></i>{{ $booking[0]->phone }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <form action="{{ route('send-email') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                <input type="text" name="email" class="form-control"
                                    placeholder="Email Address">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                <input type="text" name="phone" class="form-control"
                                    placeholder="Phone Number">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                                <input type="text" name="address" class="form-control"
                                    placeholder="Post Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group textbox">
                                <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                            <p class="contact-form-info">*Send an email. All fields are required.</p>
                            <button class="btn btn-color1 btn-contact-form">Submit Form <i
                                    class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </form>
                @if (session('email_oki'))
                    <script>
                        window.alert("Email sent successfully!");
                    </script>
                @endif
                @if ($errors->any())
                    <script>
                        window.alert("There was an error sending the email. Please try again with valid informations.");
                    </script>
                @endif

            </div>
        </section>
        <!--Contact end-->

        <!--Address start-->
        <section class="address" id="sc-address">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div style="position: relative">
                            <h2><img src="{{ asset('build/assets/second/img/my_img/owner/hotel_logo.png') }}"
                                    style="width: 200px; " alt="Logo" /></h2>
                        </div>
                        <div style="position: absolute; right:0;left:0; top:160px; ">
                            <p class="fw-bold" style="font-size: 3rem">Hotel Travel Inn</p>
                        </div>
                        <address>Street-15, Lakeside, Pokhara</address>
                        <p class="address-info">If you have questions or need additional information, please call Us:
                        </p>
                        <ul class="phones">
                            <li><a href="tel:+977 61452631" style="color: rgb(87,188,202)"><i
                                        class="fa fa-mobile"></i>+977 61452631</a></li>
                            <li><a href="tel:{{ $booking[0]->phone }}" style="color: rgb(87,188,202)"><i
                                        class="fa fa-mobile"></i>{{ $booking[0]->phone }}</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Address end-->

        <!--Footer start-->
        <footer class="footer" id="sc-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="footer-copyright" style="color:white">
                            &copy; {{ date('Y') }} Hotel Travel Inn. All rights reserved.
                        </p>

                    </div>
                    <div class="col-md-6">
                        <ul class="footer-social-media">
                            <li><a href="https://www.tripadvisor.com/Attraction_Review-g293891-d13456537-Reviews-Peace_Himalaya_Treks_And_Travels_Pvt_Ltd-Pokhara_Gandaki_Zone_Western_Region.html"
                                    target="_blank"><i class="fa fa-tripadvisor fa-fw"></i></a></li>
                            <li><a href="mailto:hoteltravelinn@gmail.com" target="_blank"><i
                                        class="fa fa-envelope fa-fw"></i></a></li>
                            <li><a href="https://www.facebook.com/hoteltravelin" target="_blank"><i
                                        class="fa fa-facebook fa-fw"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer end-->
        </div>
        <!--End content before Slider-->

        <a href="#page-top" class="scroll-to scroll-up-btn"><i class="fa fa-angle-up"></i></a>

        <!--Room Tabs Gallery Preview Modal start-->
        <div class="modal fade" id="roomTabsGalleryPreviewModal" tabindex="-1" role="dialog"
            aria-labelledby="roomTabsGalleryPreviewModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-nav">
                        <div class="title pull-left">
                            <!-- title via js -->
                        </div>
                        <button type="button" class="close pull-right" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body" id="roomTabsGalleryPreviewModalLabel">
                        <!-- img via js -->
                    </div>
                </div>
            </div>
        </div>
        <!--Room Tabs Gallery Preview Modal start-->

        <!--Inquiry Modal start-->
        <div class="modal fade" id="inquiryModal" tabindex="-1" role="dialog"
            aria-labelledby="inquiryModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('reservation-store') }}" method="post" id="inquiry-form">
                        @csrf


                        <!-- Modal header start -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                                    class="fa fa-times-circle"></i></button>
                            <h4 class="modal-title" id="inquiryModalLabel"><i class="icon-calendar"></i> Check
                                Availability</h4>
                        </div>
                        <!-- Modal header end -->

                        <!-- Modal body start -->

                        <div class="modal-body">

                            <!-- Inquiry Room and Date start -->
                            <div class="room-and-date">
                                <div class="alert hidden" id="inquiry-form-msg"></div>
                                <div class="room-select">
                                    <div class="input-group">
                                        <select name="room_type" id="inquiry-object" class="form-control">
                                            <option value="">Select a Room!</option>
                                            <option value="Couple Bed">Couple Bed</option>
                                            <option value="Twin Bed">Twin Bed</option>
                                            <option value="Triple Bed">Triple Bed</option>
                                            <option value="Deluxe Couple Bed">Deluxe Couple Bed</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="inquiry-check-in">
                                    <div class="date-select">
                                        <label for="inquiry-date-check-in">CHECK-IN - When will you come?</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                            <input type="text" class="form-control datepicker" name="check_in"
                                                id="inquiry-date-check-in" placeholder="Date: mm/dd/yyyy">
                                        </div>
                                    </div>

                                    <div class="time-select">
                                        <label for="inquiry-time-check-in">Time</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-clock"></i></span>
                                            <select name="check_in_time" class="form-control"
                                                id="inquiry-time-check-in">
                                                <option value="">Please select your Time</option>
                                                <option value="12:00 AM">12:00 AM</option>
                                                <option value="12:30 AM">12:30 AM</option>
                                                <option value="01:00 AM">01:00 AM</option>
                                                <option value="01:30 AM">01:30 AM</option>
                                                <option value="02:00 AM">02:00 AM</option>
                                                <option value="02:30 AM">02:30 AM</option>
                                                <option value="03:00 AM">03:00 AM</option>
                                                <option value="03:30 AM">03:30 AM</option>
                                                <option value="04:00 AM">04:00 AM</option>
                                                <option value="04:30 AM">04:30 AM</option>
                                                <option value="05:00 AM">05:00 AM</option>
                                                <option value="05:30 AM">05:30 AM</option>
                                                <option value="06:00 AM">06:00 AM</option>
                                                <option value="06:30 AM">06:30 AM</option>
                                                <option value="07:00 AM">07:00 AM</option>
                                                <option value="07:30 AM">07:30 AM</option>
                                                <option value="08:00 AM">08:00 AM</option>
                                                <option value="08:30 AM">08:30 AM</option>
                                                <option value="09:00 AM">09:00 AM</option>
                                                <option value="09:30 AM">09:30 AM</option>
                                                <option value="10:00 AM">10:00 AM</option>
                                                <option value="10:30 AM">10:30 AM</option>
                                                <option value="11:00 AM">11:00 AM</option>
                                                <option value="11:30 AM">11:30 AM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:30 PM">12:30 PM</option>
                                                <option value="01:00 PM">01:00 PM</option>
                                                <option value="01:30 PM">01:30 PM</option>
                                                <option value="02:00 PM">02:00 PM</option>
                                                <option value="02:30 PM">02:30 PM</option>
                                                <option value="03:00 PM">03:00 PM</option>
                                                <option value="03:30 PM">03:30 PM</option>
                                                <option value="04:00 PM">04:00 PM</option>
                                                <option value="04:30 PM">04:30 PM</option>
                                                <option value="05:00 PM">05:00 PM</option>
                                                <option value="05:30 PM">05:30 PM</option>
                                                <option value="06:00 PM">06:00 PM</option>
                                                <option value="06:30 PM">06:30 PM</option>
                                                <option value="07:00 PM">07:00 PM</option>
                                                <option value="07:30 PM">07:30 PM</option>
                                                <option value="08:00 PM">08:00 PM</option>
                                                <option value="08:30 PM">08:30 PM</option>
                                                <option value="09:00 PM">09:00 PM</option>
                                                <option value="09:30 PM">09:30 PM</option>
                                                <option value="10:00 PM">10:00 PM</option>
                                                <option value="10:30 PM">10:30 PM</option>
                                                <option value="11:00 PM">11:00 PM</option>
                                                <option value="11:30 PM">11:30 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>


                                <div class="inquiry-check-out">
                                    <div class="date-select">
                                        <label for="inquiry-date-check-out">CHECK-OUT - When will you go?</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                            <input type="text" class="form-control datepicker" name="check_out"
                                                placeholder="Date: mm/dd/yyyy" id="inquiry-date-check-out">
                                        </div>
                                    </div>
                                    <div class="time-select">
                                        <label for="inquiry-time-check-out">Time</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-clock"></i></span>
                                            <select name="check_out_time" class="form-control"
                                                id="inquiry-time-check-out">
                                                <option value="">Please select your Time</option>
                                                <option value="12:00 AM">12:00 AM</option>
                                                <option value="12:30 AM">12:30 AM</option>
                                                <option value="01:00 AM">01:00 AM</option>
                                                <option value="01:30 AM">01:30 AM</option>
                                                <option value="02:00 AM">02:00 AM</option>
                                                <option value="02:30 AM">02:30 AM</option>
                                                <option value="03:00 AM">03:00 AM</option>
                                                <option value="03:30 AM">03:30 AM</option>
                                                <option value="04:00 AM">04:00 AM</option>
                                                <option value="04:30 AM">04:30 AM</option>
                                                <option value="05:00 AM">05:00 AM</option>
                                                <option value="05:30 AM">05:30 AM</option>
                                                <option value="06:00 AM">06:00 AM</option>
                                                <option value="06:30 AM">06:30 AM</option>
                                                <option value="07:00 AM">07:00 AM</option>
                                                <option value="07:30 AM">07:30 AM</option>
                                                <option value="08:00 AM">08:00 AM</option>
                                                <option value="08:30 AM">08:30 AM</option>
                                                <option value="09:00 AM">09:00 AM</option>
                                                <option value="09:30 AM">09:30 AM</option>
                                                <option value="10:00 AM">10:00 AM</option>
                                                <option value="10:30 AM">10:30 AM</option>
                                                <option value="11:00 AM">11:00 AM</option>
                                                <option value="11:30 AM">11:30 AM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:30 PM">12:30 PM</option>
                                                <option value="01:00 PM">01:00 PM</option>
                                                <option value="01:30 PM">01:30 PM</option>
                                                <option value="02:00 PM">02:00 PM</option>
                                                <option value="02:30 PM">02:30 PM</option>
                                                <option value="03:00 PM">03:00 PM</option>
                                                <option value="03:30 PM">03:30 PM</option>
                                                <option value="04:00 PM">04:00 PM</option>
                                                <option value="04:30 PM">04:30 PM</option>
                                                <option value="05:00 PM">05:00 PM</option>
                                                <option value="05:30 PM">05:30 PM</option>
                                                <option value="06:00 PM">06:00 PM</option>
                                                <option value="06:30 PM">06:30 PM</option>
                                                <option value="07:00 PM">07:00 PM</option>
                                                <option value="07:30 PM">07:30 PM</option>
                                                <option value="08:00 PM">08:00 PM</option>
                                                <option value="08:30 PM">08:30 PM</option>
                                                <option value="09:00 PM">09:00 PM</option>
                                                <option value="09:30 PM">09:30 PM</option>
                                                <option value="10:00 PM">10:00 PM</option>
                                                <option value="10:30 PM">10:30 PM</option>
                                                <option value="11:00 PM">11:00 PM</option>
                                                <option value="11:30 PM">11:30 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="inquiry-people">
                                    <div class="people-select">
                                        <label for="inquiry-children">CHILDREN - With children?</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-user-follow"></i></span>
                                            <select name="children" class="form-control" id="inquiry-children">
                                                <option value="0">Without children’s</option>
                                                <option value="1">1 - Child</option>
                                                <option value="2">2 - Children</option>
                                                <option value="3">3 - Children</option>
                                                <option value="4">4 - Children</option>
                                                <option value="5">5 - Children</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="people-select" style="padding-right: 7px;">
                                        <label for="adults">ADULTS - How many guests?</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-user-follow"></i></span>
                                            <select name="adults" class="form-control" id="inquiry-adults">
                                                <option value="1">1 - Adult</option>
                                                <option value="2">2 - Adult</option>
                                                <option value="3">3 - Adult</option>
                                                <option value="4">4 - Adult</option>
                                                <option value="5">5 - Adult</option>
                                                <option value="6">6 - Adult</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- Inquiry Room and Date end -->

                            <hr />

                            <!-- Appointment Personal Information start -->
                            <div class="personal-information">
                                <h2>Personal Information</h2>

                                <div class="form-group first-name-group">
                                    <label for="first-name">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="first-name"
                                        placeholder="Enter your first name">
                                </div>
                                <div class="form-group last-name-group">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="last-name"
                                        placeholder="Enter your last name">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group address-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" id="address"
                                        placeholder="Enter your address">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group zip-code-group">
                                    <label for="zip-code">Zip Code</label>
                                    <input type="text" name="zip_code" class="form-control" id="zip-code"
                                        placeholder="Enter your zip-code">
                                </div>
                                <div class="form-group city-group">
                                    <label for="city">City</label>
                                    <input type="text" name="city" class="form-control" id="city"
                                        placeholder="Enter your city">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group phone-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Enter your phone no.">
                                </div>
                                <div class="form-group email-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="Enter your email">
                                </div>
                                <div class="clearfix"></div>
                                <div class="newsletter-checkbox" hidden>
                                    <input type="checkbox" id="newsletter-cb" name="newsletter"
                                        value="Yes, Please send me latest news and updates!">
                                    <label for="newsletter-cb">Please send me latest news and updates!</label>
                                </div>
                            </div>
                            <!-- Appointment Personal Information end -->

                        </div>
                        <!-- Modal body end -->

                        <!-- Modal footer start -->
                        <div class="modal-footer">

                            <div class="inquiry-info">
                                <div class="inquiry-info-sign hidden-xs">!</div>
                                <p>Please note that this is not an actual reservation, but only a request for one.
                                    <br />
                                    <strong>We will contact you with a confirmation shortly. Thank you!</strong>
                                </p>
                            </div>
                            <button class="btn btn-inquiry-submit">Check Availablility</button>

                        </div>
                    </form>

                    <!-- Modal footer end -->

                </div>
            </div>
        </div>
        <!--Inquiry Modal end-->

        <style>
            .gallery {
                background-image: url('{{ asset('build/assets/second/images/bg_gallery.jpg') }}');
            }

            lightbox.option( {
                    'resizeDuration': 200,
                    'wrapAround': true
                }

            );
        </style>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=" {{ asset('build/assets/second/bower_components/jquery/dist/jquery.min.js') }}"></script>

        <!--Start Style Switcher (remove before upload to Themeforest)-->
        <!--End Style Switcher (remove before upload to Themeforest)-->

        <script src=" {{ asset('build/assets/second/bower_components/jquery-placeholder/jquery.placeholder.min.js') }}">
        </script>
        <script src=" {{ asset('build/assets/second/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src=" {{ asset('build/assets/second/bower_components/jquery-animatenumber/jquery.animateNumber.min.js') }}">
        </script>
        <script
            src=" {{ asset('build/assets/second/bower_components/bootstrap-3-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
        </script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=" {{ asset('build/assets/second/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <!-- Google Maps Api -->


        <script src=" {{ asset('build/assets/second/js/custom.js') }}"></script>

        {{-- next js  --}}
        <script src=" {{ asset('build/assets/second/js/js/minify.js') }}"></script>
        <script src=" {{ asset('build/assets/second/js/js/classie.js') }}"></script>
        <script src=" {{ asset('build/assets/second/js/js/jquery-2.1.3.js') }}"></script>
        <script src=" {{ asset('build/assets/second/js/js/jquery.counterup.min.js') }}"></script>
        <script src=" {{ asset('build/assets/second/js/js/jquery.easing.1.3.js') }}"></script>
        <script src=" {{ asset('build/assets/second/js/js/jquery.quicksand.js') }}"></script>
        <script src=" {{ asset('build/assets/second/js/js/jquery.swipebox.min.js') }}"></script>
        <script src=" {{ asset('build/assets/second/js/js/jquery.touchSwipe.min.js') }}"></script>
        <script src=" {{ asset('build/assets/second/js/js/main.js') }}"></script>
        <script src=" {{ asset('build/assets/second/js/js/selectFx.js') }}"></script>
        <script src=" {{ asset('build/assets/second/js/js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>


</body>


</html>
