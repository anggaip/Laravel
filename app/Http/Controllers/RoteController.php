<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;

class RoteController extends Controller
{
    public function index()
    {
    	if (View::exists('latihan.rote')) {
    		return view('latihan.rote');
    	}
    }

    public function beyond(Request $request)
    {
    	echo $request->cookie('nama_pertama');
    }

    public function create()
    {
    	return view('latihan.rote');
    }

    public function store(Request $request)
    {
    	$data = $request->path();

    	if ($request->has('kirim')) {
	    	if ($request->is('admin/*')) {
	    		if ($request->isMethod('post')) {
	    			$data = $request->except('lastname');
	    			$password = Hash::make($request->firstname);

	    			if (Hash::check('www', $password)) {
	    				echo "Password cocok";
	    			} else {
	    				echo "Gak Cocok";
	    			}
	    		} else {
	    			echo "Not Valid Method";
	    		}
	    	} else {
	    		echo "Not Valid path";
	    	}
	    } else {
	    	echo "Not Valid Request";
	    }
    }
}
