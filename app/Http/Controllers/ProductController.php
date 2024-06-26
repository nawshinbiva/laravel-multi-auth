<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //this method will show product page
    public function index(){
        
    }
    // this method will show create product page
    public function create(){
        return view('product.create');
    }
    // this method will store a product in db
    public function store(){
        
    }
    // this method will show edit product page
    public function edit(){

    }
    //this method will update a product
    public function update(){

    }
    //this method will delete a product
    public function destroy(){

    }


}
