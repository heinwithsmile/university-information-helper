<?php

namespace App\Http\Controllers;
use App\Query;
use App\User;


class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }
    public function login()
    {
        return view('admin.adminLogin');
    }

    public function student()
    {
        $users = User::all();
        return view('admin.student',compact('users'));
    }
    public function query()
    {
        $queries = Query::all();
        return view('admin.query',compact('queries'));
    }


}
