@extends('front.main')

@section('title','Media')

@section('content')

    <!-- Content -->
    <div id="content">

        <!-- MAIN BANNER -->
        <section class="main-bnr">
            <div class="container">
                <div class="media">
                    <div class="media-left">
                        <!-- Avatar -->
                        <div class="avatar"> <img class="img-responsive" src="images/avatar.jpg" alt=""> </div>
                    </div>
                    <div class="media-body">
                        <h1>Desirée Diouf</h1>
                        <p><i class="fa fa-microphone"></i> Singer </p>
                        <p><i class="fa fa-map-marker"></i> London, England</p>
                        <div class="flowers"> <span>Followers: 23,356 </span><span> Following: 834</span> </div>

                        <!-- Btn -->
                        <a href="#." class="btn"><i class="fa fa-user-plus"></i>Follow</a> <a href="#." data-toggle="modal" data-target="#myModal" class="btn"><i class="fa fa-envelope-o"></i>Send A Message</a> <a href="#." class="btn"><i class="fa fa-share-alt"></i>Share Profile</a> </div>
                </div>
            </div>

            <!-- COnatct Form PopUp -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="container">
                            <h6><a class="close" href="#." data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a> Send Message</h6>

                            <!-- Forms -->
                            <form action="#">
                                <ul class="row">
                                    <li class="col-xs-12">
                                        <input type="text" placeholder="First Name ">
                                    </li>
                                    <li class="col-xs-6">
                                        <input type="text" placeholder="Email">
                                    </li>
                                    <li class="col-xs-6">
                                        <input type="text" placeholder="Subjext">
                                    </li>
                                    <li class="col-xs-12">
                                        <textarea placeholder="Your Message"></textarea>
                                    </li>
                                    <li class="col-xs-12 text-center">
                                        <button class="btn btn-primary">Send message</button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COnatct Form PopUp -->

        </section>

        <!-- Nav Bar Block -->
        <div class="container">
            <div class="nav-bar-block">
                <ul>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a class="active" href="media.html">Media</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="news.html">News</a></li>
                </ul>
                <span class="listner"><i class="fa fa-headphones margin-right-5"></i> 123,087 K</span> </div>
        </div>

        <!-- About -->
        <section class="portfolio port-wrap  padding-top-80 padding-bottom-80 about-page">
            <div class="container">

                <!-- Work Filter -->
                <ul class="tabs media-filter">
                    <li><a class="active" href="#." data-filter="*">All</a></li>
                    <li><a href="#." data-filter=".video">Video</a></li>
                    <li><a href="#." data-filter=".audio">Audio</a></li>
                    <li><a href="#." data-filter=".images">Images</a></li>
                    <li><a href="#." data-filter=".lyrics">Lyrics</a></li>
                </ul>

                <!-- PORTFOLIO ITEMS -->
                <div class="items row col-4">

                    <!-- MEDIA -->
                    <article class="media-item audio images">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-1.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item video images lyrics">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-2.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio video images">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-3.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio images lyrics">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-4.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio video lyrics">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-5.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item video lyrics">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-6.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio images lyrics">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-7.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio video">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-8.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio video lyrics">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-9.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio lyrics">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-10.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item audio video images">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-11.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>

                    <!-- MEDIA -->
                    <article class="media-item video images lyrics">
                        <div class="media-image"> <a href="#."> <img alt="Open Imagination" src="images/media-img-12.jpg"> </a> </div>
                        <div class="media-overlay">
                            <div class="position-center-center"> <span><a href="#."><i class="fa fa-play"></i></a> <a href="#."><i class="fa fa-link"></i></a></span>
                                <h3><a href="#.">Malibu Festival
                                        Performance</a></h3>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>

@stop
