<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function sample01(){
        $people = ['A', 'B', 'C', 'D'];
        return view('pages.contact')->with(['people' => $people]);
    }
    public function layout01(){
        return view('layoutSample01');
    }
    public function layout02(){
        return view('layoutSample02');
    }
    public function style01(){
        return view('style01');
    }
}
