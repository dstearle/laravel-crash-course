<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // The view for the Index Page
    // public function index() {

    //     return 'INDEX';

    // }
    public function index() {

        // String to be passed into the view
        $title = 'Welcome to Laravel!';

        // Example One: passing in string to view
        // return view('pages.index', compact('title'));
        // Example Two: passing in string to view
        return view('pages.index')->with('title', $title);

    }

    // The view for the About Page
    public function about() {

        // String to be passed into the view
        $title = 'About Us';

        return view('pages.about')->with('title', $title);

    }

    // The view for the Services Page
    public function services() {

        // Array to be passed into the view
        $data = array(

            'title' => 'Services',
            'services' => ['Web Designs', 'Programming', 'SEO']

        );

        return view('pages.services')->with($data);

    }

}
