<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Doctor;
use App\Models\Backend\DoctorsCategory;
use App\Models\Backend\Staff;
use App\Models\Backend\StaffCategory;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

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

    public function doctors()
    {
        $doctors = Doctor::with('category')->where('status', 1)->get(); // Only active doctors
        $categories = DoctorsCategory::all();
        return view('frontend.pages.doctors', compact('doctors', 'categories'));
    }

    public function ambulance(){
        return view('frontend.pages.ambulance');
    }

    public function pharmacy(){
        return view('frontend.pages.pharmacy');
    }

     public function management(){
        return view('frontend.pages.management');
     }
    public function staff()
    {
        $staff = Staff::with('category')->get(); // Eager load category relationship
        $categories = StaffCategory::all(); // Fetch all categories for filter buttons
        return view('frontend.pages.staff', compact('staff', 'categories'));
    }
     public function shareholders(){
        return view('frontend.pages.shareholders');
     }

     public function contact(){
            return view('frontend.pages.contact');
    }
    public function working(){
            return view('frontend.pages.working');
    }

}
