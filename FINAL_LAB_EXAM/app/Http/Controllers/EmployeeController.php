<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function index(){

        
        return view('employee.home');
    }

    function store(Request $req){

        $product = new Product;
        $product->name=$req->name;
        $product->price=$req->price;
        $product->quantity=$req->quantity;
        $product->user_id=Auth::check()->id;

        $product->save();
      

        return redirect('admin');



    }
}
