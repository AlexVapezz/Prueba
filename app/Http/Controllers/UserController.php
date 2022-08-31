<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    function show(){
        $data_user = User::paginate(10);
        $data_rol = Role::all();
        return view('user', ['users' => $data_user, 'roles' => $data_rol]);
    }
}
