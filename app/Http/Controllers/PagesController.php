<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    $title = 'Welcome to Laravel';
        return view('pages.index')->with('title', $title);;
    }

    public function about(){
        return view('pages.about');
    }
    
    public function Services()
    {
        $data = array(
            'title'=>'Our Services',
            'services' => ['Web design', 'Programming','SEO']

        );
        return view('pages.services')->with($data);
    }
}
