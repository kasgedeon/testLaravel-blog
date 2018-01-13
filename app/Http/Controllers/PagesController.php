<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //index - home
    public function index(){
      $title = 'Welcome To Test-Laravel';
      //return view('pages.index', compact('title'));
      return view('pages.index')->with('title', $title);
    }

    //about
    public function about(){
      $title = 'About Us';
      return view('pages.about')->with('title', $title);
    }

    //Services
    public function services(){
      $data = array(
        'title' => 'Services',
        'services' => ['Web Design', 'Programming', 'System Security']
      );
      return view('pages.services')->with($data);
    }
}
