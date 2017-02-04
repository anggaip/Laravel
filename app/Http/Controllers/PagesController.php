<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use App\Http\Requests;
use View;

class PagesController extends Controller
{
    public function index()
    {
    	if(View::exists('welcome')) {
    		return view('welcome');
    	} else {
    		return "View file does not exist";
    	}
    }
}
