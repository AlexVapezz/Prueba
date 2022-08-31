<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //
    function show(){
        $data_rol = Role::paginate(10);
        return view('rol', ['roles' => $data_rol]);
    }
}
