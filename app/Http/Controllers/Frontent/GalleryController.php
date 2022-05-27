<?php

namespace App\Http\Controllers\Frontent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        return view('Frontent.gallery');
    }
}
