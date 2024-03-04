<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    public function index(){
        return view('Products.index');//folder name of view;
    }
    public function Newblog(){
        return view('Products.addnewblog');
    }
    public function update(){
        return view('Products.update');
    }
    public function store(Request $request){
        // dd($request->all());
        $content = $request->input('content');
        $name = $request->input('name');
        // dd($request);
        $newProduct = product::create([
            'Description' => $content,
            'name'=>$name,
            'Quantity'=>30,
            'Price'=>20
        ]);
    }
}
