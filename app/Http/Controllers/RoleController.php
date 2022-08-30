<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //
    function show(){
        $data = Role::paginate(2);
        return view('list', ['roles' => $data]);
    }
}
