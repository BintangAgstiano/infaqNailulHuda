<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $dataUser=User::get();
        return view('user.index',compact('dataUser'));
    }
    public function create(){
        return view('user.create');
    }
}
