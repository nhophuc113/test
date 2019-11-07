<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        echo $id;
        var_dump(User::findOrFail($id));
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}