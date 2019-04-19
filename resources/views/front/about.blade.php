@extends('front.main')

@section('title','About')

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
                <li> <a href="media.html">Media</a></li>
                <li><a class="active" href="about.html">About</a></li>
                <li><a href="news.html">News</a></li>
            </ul>
            <span class="listner"><i class="fa fa-headphones margin-right-5"></i> 123,087 K</span> </div>
    </div>

    <!-- About -->
    <section class="padding-top-80 padding-bottom-80 about-page">
        <div class="container">
            <div class="row">
                <!-- About text -->
                <div class="col-md-8">
                    <h4>About the Artist</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur quon adipiscing elit. Suspendisse at erat accumsan bibendum magna in, laoreet lorem. Nunc condi mentum suscipit facilisis. Donec mollis lectus in posuere convallis. Vestibulum feugiat faucibus erat, non interdum massa interdum ac. Pellen tesque consectetur orci quis neque maximus, id tristique mauris tempus. Maecenas sed dui nunc. <br>
                        <br>
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis <br>
                        dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. <br>
                        <br>
                        Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                </div>

                <!-- Personal Info -->
                <div class="col-md-4">
                    <div class="per-info">
                        <h4>Contact Information</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur quon
                            adipiscing elit. Suspendisse at erat accumsan
                            bibendum magna in, laoreet lorem. Nunc condi mentum suscipit facilisis. Donec mollis lectus in posuere convallis. Vestibulum feugiat faucibus erat, non interdum massa interdum ac. Pellen tesque consectetur orci quis neque maximus </p>
                        <p class="margin-top-20"> <strong> Website: </strong> www.desireediouf.com</p>
                        <p> <strong>Email: </strong> ************** <i class="fa fa-info-circle"></i></p>

                        <!-- Social Icons -->
                        <ul class="social_icons">
                            <li><a href="#."><i class="fa fa-facebook"></i> </a></li>
                            <li><a href="#."><i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#."><i class="fa fa-google"></i> </a></li>
                            <li><a href="#."><i class="fa fa-soundcloud"></i> </a></li>
                            <li><a href="#."><i class="fa fa-youtube"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
