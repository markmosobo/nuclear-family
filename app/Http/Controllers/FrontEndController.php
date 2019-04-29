<?php

namespace App\Http\Controllers;

    use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\churchGroupMember;
use App\Models\Contact;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventSchedule;
use App\Models\Location;
use App\Models\Members;
use App\Models\Sermon;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('front.index',[
        ]);
    }

    public function about(){
        return view('front.about',[
        ]);
    }

    public function music(){
        return view('front.music',[
        ]);
    }

    public function blog(){
        return view('front.blog',[
        ]);
    }

    public function media(){
        return view('front.media',[
        ]);
    }

    public function artists(){
        return view('front.artists',[

        ]);
    }

    public function signUp(){
        return view('front.signup',[
        ]);
    }

}
