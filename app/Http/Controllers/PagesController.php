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

        return view('pages.index');

    }

}
