<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view

        return view('index.index', [
            'title' => 'Laravel Project about us',
            'text' => '<p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
            </p>',
            'imgURL' => 'assets/images/about/about-part.jpg',
        ]);
    }
}
