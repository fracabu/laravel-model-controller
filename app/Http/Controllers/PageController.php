<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class PageController extends Controller
{

    function index () {

        $data = Page::all();
        dump($data);
        return view('index');
    }
}
