<?php

namespace App\Http\Controllers;

class SliderController extends Controller
{
    public function index()
    {
        $images = [
            ['url' => asset('assets/images/burger.jpg'), 'caption' => 'Caption for Image 1'],
            ['url' => asset('assets/images/burger.jpg'), 'caption' => 'Caption for Image 2'],
            ['url' => asset('assets/images/burger.jpg'), 'caption' => 'Caption for Image 3']
        ];
        return view('slider', compact('images'));
    }
}
