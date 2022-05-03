<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index()
    {
       // $contacts = Contact::all();
      return view ('layout.index');
    }

}
