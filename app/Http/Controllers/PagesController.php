<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('myfirstsite.index', [
            'tasks' => [
                'Go to the store',
                'Go to the market',
                'Go to work'
            ]
        ]);
    }

    public function about(){
        return view('myfirstsite.about');
    }

    public function contact() {
        return view('myfirstsite.contact');
    }
}
