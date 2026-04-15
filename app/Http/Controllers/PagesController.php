<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function veterans()  { return view('pages.veterans'); }
    public function students()  { return view('pages.students'); }
    public function employees() { return view('pages.employees'); }
    public function rehab()     { return view('pages.rehab'); }
    public function government(){ return view('pages.government'); }
    public function peernow()   { return view('pages.peernow'); }
    public function ourStory()  { return view('pages.about-story'); }
    public function ourVision() { return view('pages.about-vision'); }
    public function team()      { return view('pages.team'); }
    public function news()      { return view('pages.news'); }
    public function peerCounseling() { return view('pages.peer-counseling'); }
    public function helpfulLinks()   { return view('pages.helpful-links'); }
    public function support()        { return view('pages.support'); }
}
