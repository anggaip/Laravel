<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;

class UsersController extends Controller
{
    public function index()
    {
    	$users = [
			'0' => [
				'first_name' => 'Angga',
				'last_name' => 'Indriya',
				'location' => 'Sumatera'
			],
			'1' => [
				'first_name' => 'Denis',
				'last_name' => 'Tia',
				'location' => 'Kalimantan'
			]
		];
	    return view('admin.users.index', compact('users'));
    }

    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
    	User::create($request->all());
    	return 'success';
    	return $request->all();
    }

    public function user($name = null) 
    {
        echo "Helo ".$name;
    }
}
