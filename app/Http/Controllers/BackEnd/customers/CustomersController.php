<?php

namespace App\Http\Controllers\BackEnd\cuetomers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function contact(){
        return view('BackEnd.contact_us');
    }
}
