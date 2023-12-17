<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view("home");
    }

    public function about()
    {
        $title = "About us - Online Store";

        $subtitle = "About us Page";

        $description = "This is an about page ...";

        $author = "Developed by: FirstName LastName";

        return view('home.about')->with('title', $title)

            ->with('subtitle', $subtitle)

            ->with('description', $description)

            ->with('author', $author);
    }
}
