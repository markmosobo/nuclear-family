@extends('front.main')

@section('title','Sign Up')

@section('content')

    <!-- MAIN BANNER -->
    <section class="sub-bnr">
        <div class="position-center-center">
            <div class="container">
                <h2>Join Talento!</h2>
                <ul class="breadcrumb">
                    <li><a href="#">Home </a></li>
                    <li class="active">JOIN</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="padding-top-80 padding-bottom-80 about-page register">
        <div class="container">
            <div class="row">
                <!-- Create New Account -->
                <div class="col-sm-6">
                    <form>
                        <h4>Create New Account</h4>
                        <label>
                            <input type="text" placeholder="Email Address">
                        </label>
                        <label>
                            <input type="password" placeholder="Password">
                        </label>
                        <label>
                            <input type="password" placeholder="Repeat Password">
                        </label>
                        <button type="submit" class="btn">Create New Account</button>
                    </form>
                </div>

                <!-- user Login -->
                <div class="col-sm-6">
                    <form>
                        <h4>user Login</h4>
                        <label>
                            <input type="text" placeholder="Email Address">
                        </label>
                        <label>
                            <input type="password" placeholder="Password">
                        </label>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox1">
                            <label for="checkbox1"> Remember Me </label>
                        </div>
                        <button type="submit" class="btn">Login</button>
                        <a href="#." class="forget"> Forgot Password?</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

@stop
