@extends('front.main')

@section('title','Music')

@section('content')

    <!-- Content -->
    <div id="content">

        <!-- MAIN BANNER -->
        <section class="sub-bnr">
            <div class="position-center-center">
                <div class="container">
                    <h2>discover music</h2>
                    <ul class="breadcrumb">
                        <li><a href="#">Home </a></li>
                        <li><a href="#">Search </a></li>
                        <li class="active">Discover</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- About -->
        <section class="portfolio port-wrap discover-music padding-top-80 padding-bottom-80 about-page">
            <div class="container">

                <!-- Work Filter -->
                <ul class="tabs media-filter">
                    <li><a class="active" href="#." data-filter="*">All</a></li>
                    <li><a href="#." data-filter=".multi">Multimedia</a></li>
                    <li><a href="#." data-filter=".audio">Music</a></li>
                    <li><a href="#." data-filter=".images">Video</a></li>
                    <li><a href="#." data-filter=".lyrics">Lyrics</a></li>
                    <li><a href="#." data-filter=".gal">Gallery</a></li>
                </ul>

                <!-- PORTFOLIO ITEMS -->
                <div class="items row col-4">

                    <!-- MEDIA -->
                    <article class="media-item audio  lyrics images">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-1.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-music"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio multi images gal">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-2.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-file"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio multi lyrics images">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-3.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-file"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio multi lyrics gal">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-4.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-photo"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item  lyrics images gal">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-5.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-photo"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio multi  gal">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-6.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-play"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio multi lyrics images">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-7.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-play"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio  lyrics images">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-8.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-music"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio multi images gal">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-9.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-file"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio multi lyrics images">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-10.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-file"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio multi lyrics gal">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-11.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-photo"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item  lyrics images gal">
                        <div class="media-image"> <a href="#."> <img alt="" src="images/media-img-12.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="tag"><i class="fa fa-photo"></i></div>
                            <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <span>By: Alexa Niall</span>
                            <h6>Somewhere Out There</h6>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>

@stop
