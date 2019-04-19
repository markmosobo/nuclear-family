@extends('front.main')

@section('title','Home')

@section('content')

    <!-- Bnr Head -->
    <section class="bnr-head">
        <div class="container">
            <div class="position-center-center">
                <h3>{{config('app.name')}} - Music Market Network</h3>
                <p>{{config('app.name')}} is a market network that puts together artistcs, music producers,
                    instruments & music material vendors all within one community. In order to guarantee
                    the quality, registration is based on invitation-only</p>
                <a href="{{url('signup')}}" class="btn">Join Us Now</a> <a href="#." class="btn btn-trans">Explore</a> </div>
        </div>
    </section>

    <!-- Discover -->
    <section class="discover">
        <div class="container">
            <div class="main-heading">
                <h3>discover</h3>
                <hr>
            </div>
            <div class="discover-music pic-dis">
                <ul class="row">
                    <li class="col-sm-4"> <img class="img-responsive" src="images/dis-img-1.jpg" alt="" >
                        <a href="media.html">Musicians</a>
                    </li>
                    <li class="col-sm-4"> <img class="img-responsive" src="images/dis-img-2.jpg" alt="" >
                        <a href="media.html">Singers</a>
                    </li>
                    <li class="col-sm-4"> <img class="img-responsive" src="images/dis-img-3.jpg" alt="" >
                        <a href="media.html">Song writers</a>
                    </li>
                    <li class="col-sm-4"> <img class="img-responsive" src="images/dis-img-4.jpg" alt="" >
                        <a href="media.html">Producers</a>
                    </li>
                    <li class="col-sm-4"> <img class="img-responsive" src="images/dis-img-5.jpg" alt="" >
                        <a href="media.html">Directors</a>
                    </li>
                    <li class="col-sm-4"> <img class="img-responsive" src="images/dis-img-6.jpg" alt="" >
                        <a href="media.html">Vendors</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="portfolio port-wrap discover-music padding-top-80 padding-bottom-80 filter-index about-page">
        <div class="container">

            <!-- Work Filter -->
            <ul class="tabs media-filter text-center">
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
                <article class="media-item audio lyrics images">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-1.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>pop, electro, funk</span>
                        <h6>Lupita Niyog</h6>
                    </div>
                </article>

                <!-- MEDIA -->
                <article class="media-item audio multi images gal">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-2.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>Country, pop</span>
                        <h6>Alexa Niall</h6>
                    </div>
                </article>

                <!-- MEDIA -->
                <article class="media-item audio multi lyrics images">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-3.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>Worship, christian</span>
                        <h6>Sang Mil Yuk</h6>
                    </div>
                </article>

                <!-- MEDIA -->
                <article class="media-item audio multi lyrics gal">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-4.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>Electro, dance</span>
                        <h6>Jonathan Volk</h6>
                    </div>
                </article>

                <!-- MEDIA -->
                <article class="media-item  lyrics images gal">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-5.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>Rock, punk</span>
                        <h6>Keri Peterson</h6>
                    </div>
                </article>

                <!-- MEDIA -->
                <article class="media-item audio multi  gal">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-6.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>Rock</span>
                        <h6>The Mirrors</h6>
                    </div>
                </article>

                <!-- MEDIA -->
                <article class="media-item audio multi lyrics images">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-7.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>JAZZ</span>
                        <h6>James Blake</h6>
                    </div>
                </article>

                <!-- MEDIA -->
                <article class="media-item audio  lyrics images">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-8.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>POP</span>
                        <h6>David Legend</h6>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Latest Release -->
    <section class="latest-release">
        <div class="container">
            <div class="main-heading">
                <h3>latest releases</h3>
                <hr>
            </div>

            <!-- Latest Release -->

            <div class="row">
                <div class="col-md-6">
                    <article> <img src="images/relase-img-1.jpg" alt="" >
                        <div class="botm-text"> <span>MUSIC VIDEO</span> <a href="#.">Here Comes the Sun</a> </div>
                    </article>
                </div>

                <!-- Latest Release -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <article> <img src="images/relase-img-2.jpg" alt="" >
                                <div class="botm-text"> <span>LYRICS</span> <a href="#.">Here Comes the Sun</a> </div>
                            </article>
                        </div>

                        <!-- Latest Release -->
                        <div class="col-md-6">
                            <article> <img src="images/relase-img-3.jpg" alt="" >
                                <div class="botm-text"> <span>Song</span> <a href="#.">Across the Universe</a> </div>
                            </article>
                        </div>

                        <!-- Latest Release -->
                        <div class="col-md-6">
                            <article> <img src="images/relase-img-4.jpg" alt="" >
                                <div class="botm-text"> <span>SONG</span> <a href="#.">Eterna</a> </div>
                            </article>
                        </div>

                        <!-- Latest Release -->
                        <div class="col-md-6">
                            <article> <img src="images/relase-img-5.jpg" alt="" >
                                <div class="botm-text"> <span>Music video</span> <a href="#.">Louder Than Words</a> </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
