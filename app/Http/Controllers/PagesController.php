<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index', [
            'tasks' => [
                'Go to the store',
                'Go to the market',
                'Go to work'
            ]
        ]);
    }

    public function about(){
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
