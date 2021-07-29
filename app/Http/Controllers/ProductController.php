<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('form');
    }
    public function store(Request $request){
        $list = new Product();
        $list->fill($request->all());
        $list->save();
        return redirect('list');
    }
    public function index(){
        $list = Product::all();
        return view('list',[
            'list' => $list
        ]);
    }
}
