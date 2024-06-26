<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request){
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',
            
        ];
        $Validator=Validator::make($request->all(),$rules);

        if($Validator->fails()){
            return redirect()->route('products.create')->withInput()->withErrors($Validator);
        }
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
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
