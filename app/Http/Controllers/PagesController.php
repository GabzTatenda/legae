<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }
    public function admin(){
        return view('admin.Admin');
    }

    public function crudstdnt(){
        return view('admin.CRUD student.show');
    }
    public function crudtr(){
        return view('admin.CRUD teacher.show');
    }
    public function crudad(){
        return view('admin.CRUD admin.show');
    }
    public function crudcl(){
        return view('admin.CRUD classes.show');
    }
}
