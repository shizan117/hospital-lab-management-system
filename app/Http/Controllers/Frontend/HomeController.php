<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.pages.home');
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function services(){
        return view('frontend.pages.services');
    }

    public function doctors(){
        return view('frontend.pages.doctors');
    }
     public function management(){
        return view('frontend.pages.management');
     }
     public function staff(){
         return view('frontend.pages.staff');
     }
     public function shareholders(){
        return view('frontend.pages.shareholders');
     }

     public function contact(){
            return view('frontend.pages.contact');
    }

}
