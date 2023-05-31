<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('home');
    }

    //     public function comics()
    //     {
    //         $comics = Comic::all();
    //         return view('comics', compact('comics'));
    //     }

    //     public function comic(Comic $comic)
    //     {
    //         return view('comic', compact('comic'));
    //     }
}
