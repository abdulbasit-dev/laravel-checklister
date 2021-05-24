<?php

namespace App\Http\Controllers;

use App\Page;


class PageController extends Controller
{
    public function welcome()
    {
        $page = Page::findOrFail(1); //get welcome page
        return view('page', compact('page'));
    }


    public function consultation()
    {
        $page = Page::findOrFail(2); //get consultation page
        return view('page', compact('page'));
    }
}
