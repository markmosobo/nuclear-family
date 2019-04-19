@extends('front.main')

@section('title','News')

@section('content')

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
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                <li> <a href="media.html">Media</a></li>
                <li><a href="about.html">About</a></li>
                <li><a class="active" href="news.html">News</a></li>
            </ul>
            <span class="listner"><i class="fa fa-headphones margin-right-5"></i> 123,087 K</span> </div>
    </div>

    <!-- NEWS -->
    <section class="padding-top-80 padding-bottom-80 about-page">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="news-list">
                        <!-- NEWS POST -->
                        <div class="news-post">
                            <div class="media-left">
                                <div class="post-img"> <img class="img-responsive" src="images/news-img-1.jpg" alt="" >
                                    <div class="date">12<span>SEP</span></div>
                                </div>
                            </div>
                            <div class="media-body"> <a href="#." class="post-tittle">Event Title Goes Here</a> <span><i class="fa fa-calendar"></i> 12 SEP, 2014 <i class="fa fa-calendar margin-left-20"></i> 8:00 PM</span>
                                <p>Lorem ipsum dolor sit amet, consectetur quon adipiscing elit. Suspendisse at erat accumsan bibendum magtna in, laoreet lorem. Nunc condi mentum suscipit facilisis. Donec mollis lectus in posuere convallis. Vestibulum feugiat faucibus erat, non interdum massa interdum mentum suscipit. </p>
                                <span><i class="fa fa-tags"></i> INSTRUMENTS, JAZZ, CONCERT</span> </div>
                        </div>

                        <!-- NEWS POST -->
                        <div class="news-post">
                            <div class="media-left">
                                <div class="post-img"> <img class="img-responsive" src="images/news-img-2.jpg" alt="" >
                                    <div class="date">12<span>SEP</span></div>
                                </div>
                            </div>
                            <div class="media-body"> <a href="#." class="post-tittle">Event Title Goes Here</a> <span><i class="fa fa-calendar"></i> 12 SEP, 2014 <i class="fa fa-calendar margin-left-20"></i> 8:00 PM</span>
                                <p>Lorem ipsum dolor sit amet, consectetur quon adipiscing elit. Suspendisse at erat accumsan bibendum magtna in, laoreet lorem. Nunc condi mentum suscipit facilisis. Donec mollis lectus in posuere convallis. Vestibulum feugiat faucibus erat, non interdum massa interdum mentum suscipit. </p>
                                <span><i class="fa fa-tags"></i> INSTRUMENTS, JAZZ, CONCERT</span> </div>
                        </div>

                        <!-- NEWS POST -->
                        <div class="news-post">
                            <div class="media-left">
                                <div class="post-img"> <img class="img-responsive" src="images/news-img-3.jpg" alt="" >
                                    <div class="date">12<span>SEP</span></div>
                                </div>
                            </div>
                            <div class="media-body"> <a href="#." class="post-tittle">Event Title Goes Here</a> <span><i class="fa fa-calendar"></i> 12 SEP, 2014 <i class="fa fa-calendar margin-left-20"></i> 8:00 PM</span>
                                <p>Lorem ipsum dolor sit amet, consectetur quon adipiscing elit. Suspendisse at erat accumsan bibendum magtna in, laoreet lorem. Nunc condi mentum suscipit facilisis. Donec mollis lectus in posuere convallis. Vestibulum feugiat faucibus erat, non interdum massa interdum mentum suscipit. </p>
                                <span><i class="fa fa-tags"></i> INSTRUMENTS, JAZZ, CONCERT</span> </div>
                        </div>

                        <!-- NEWS POST -->
                        <div class="news-post">
                            <div class="media-left">
                                <div class="post-img"> <img class="img-responsive" src="images/news-img-4.jpg" alt="" >
                                    <div class="date">12<span>SEP</span></div>
                                </div>
                            </div>
                            <div class="media-body"> <a href="#." class="post-tittle">Event Title Goes Here</a> <span><i class="fa fa-calendar"></i> 12 SEP, 2014 <i class="fa fa-calendar margin-left-20"></i> 8:00 PM</span>
                                <p>Lorem ipsum dolor sit amet, consectetur quon adipiscing elit. Suspendisse at erat accumsan bibendum magtna in, laoreet lorem. Nunc condi mentum suscipit facilisis. Donec mollis lectus in posuere convallis. Vestibulum feugiat faucibus erat, non interdum massa interdum mentum suscipit. </p>
                                <span><i class="fa fa-tags"></i> INSTRUMENTS, JAZZ, CONCERT</span> </div>
                        </div>

                        <!-- Pagination -->
                        <ul class="pagination">
                            <li><a href="#" aria-label="Previous"> <i class="fa fa-chevron-left"></i> </a> </li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" aria-label="Next"> <i class="fa fa-chevron-right"></i> </a> </li>
                        </ul>
                    </div>
                </div>

                <!-- SideBar -->
                <div class="col-md-3">
                    <div class="sidebar">

                        <!-- News -->
                        <h4>Featured Event</h4>
                        <div class="news-post"> <img class="img-responsive" src="images/new-img-1.jpg" alt="">
                            <article> <span>february 18, 2015</span> <a href="#." class="post-tittle">Album Cover Teaser</a>
                                <p>Lorem ipsum dolor sit amet conset
                                    elit. Integer vel magna vel enim.</p>
                                <a href="#." class="read-more"> <i class="fa fa-arrow-right"></i> Read More</a> </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
