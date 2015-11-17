<?php

namespace App\Http\Controllers;

use   Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(){
        return view('app');
    }

    public function about(){
//        $people = [];
        $people = [
            'Tylor Otwell', 'John Doe', 'Jeffrey Way', 'James Gosling'
        ];
        $first = 'Towfiq';
        $last = 'Piash';

        return view('pages.about',compact('first','last','people'));
    }

    public function contact(){
        return view('pages.contact');
    }
}
