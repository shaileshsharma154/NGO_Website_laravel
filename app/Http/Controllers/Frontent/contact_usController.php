<?php

namespace App\Http\Controllers\Frontent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contact_usController extends Controller
{
    public function index(){
        return view('Frontent.contact_us');    
    }
}
