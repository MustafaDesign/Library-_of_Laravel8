<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts(){
        return view('BackEnd.posts');
    }
    public function contact(){
        return view('BackEnd.contact_us');
    }
}
