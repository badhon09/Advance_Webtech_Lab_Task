<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){

        $emp=User::where('type','employee')->get();
        return view('admin.home',compact('emp'));
    }

    function addemployee(){
        return view('admin.addemployee');
    }


    function store(Request $req){

        $emp = new User;
        $emp->name=$req->name;
        $emp->username=$req->username;
        $emp->password=Hash::make($req->password);
        $emp->contactno=$req->contactno;
        $emp->type='employee';
        $emp->save();

        return redirect('admin');



    }

    function delete($id){
        $emp= User::find($id);
        $emp->delete();
        return redirect('admin');
    }
}
