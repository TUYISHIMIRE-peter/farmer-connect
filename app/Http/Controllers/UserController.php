<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function displayUsers()
    {
        $users = DB::table('users')->get();
        
        return view('admin.datatable', ['users'=>$users]);
    }
   
}
