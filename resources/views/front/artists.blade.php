@extends('front.main')

@section('title','Artists')

@section('content')

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

    <!-- Search Bar -->
    <div class="search-pro">
        <div class="map-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map-search-fields">
                            <div class="field">
                                <input type="text" placeholder="Keyword">
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Location">
                            </div>
                            <div class="field custom-select-box">
                                <input type="text" placeholder="Professionl">
                            </div>
                        </div>
                        <div class="search-button">
                            <button>Search </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <section class="portfolio port-wrap discover-music padding-top-80 padding-bottom-80 filter-index about-page">
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

                <!-- MEDIA -->
                <article class="media-item audio multi images gal">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-9.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>heavy metal</span>
                        <h6>Floyd Zeppelin</h6>
                    </div>
                </article>

                <!-- MEDIA -->
                <article class="media-item audio multi lyrics images">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-10.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>Rock</span>
                        <h6>Alex Panayo</h6>
                    </div>
                </article>

                <!-- MEDIA -->
                <article class="media-item audio multi lyrics gal">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-11.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>hard rock</span>
                        <h6>Stefan Mayer</h6>
                    </div>
                </article>

                <!-- MEDIA -->
                <article class="media-item  lyrics images gal">
                    <div class="media-image"> <a href="#."> <img alt="" src="images/img-12.jpg"> </a> </div>
                    <div class="media-overlay">
                        <div class="position-center-center"> <a href="#." class="view-detail">View</a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <span>pop, jazz</span>
                        <h6>Denise</h6>
                    </div>
                </article>
            </div>
        </div>
    </section>

@stop
