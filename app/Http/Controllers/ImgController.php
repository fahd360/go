<?php

namespace App\Http\Controllers;

use App\Http\Requests\imgReq;
use App\Models\img;
use App\Models\User;
use Illuminate\Http\Request;

class ImgController extends Controller
{

    public function index()
    {
        $imgs = img::orderBy('id','desc')->get()->take(3);
        return view("home",compact('imgs'));
    }

 


    public function store(imgReq $request)
    {
        $request->validated();
        $img = img::create();
        $img->addMediaFromRequest("img")->toMediaCollection('imgg');
        return back();
    }


    public function show()
    {
        $imgs = img::with('media')->get();
        return view("gallery",compact('imgs'));
    }

    public function destroy(img $img)
    {
        $img->delete();
        return back();
    }

    public function au(){
        return view("aboutus");
    }

    public function DashboardIndex(){
        $imgs = img::with('media')->latest()->paginate(10);
        
        return view('dashboard.img-change' ,compact('imgs'));
    }

    public function DashboardUser(){
        
        $users = User::get();
        return view('dashboard.emails-tablec' , compact('users'));
    }
}