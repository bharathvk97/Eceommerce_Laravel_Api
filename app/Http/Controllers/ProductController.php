<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addproduct(Request $request){
        $product = new Product;
        $product->name=$request->input('name');
        $product->price=$request->input('price');
        $product->description=$request->input('description');
        $product->file_path=$request->file('file')->store('products');//storage folder->app folder-->products folder
        $product->save();
        return $product;
    }
    public function productlist(){
        return  Product::all();
    }
    public function delete($id){
        $result = Product::where('id',$id)->delete();
        if($result){
            return ["Success"=>"product has been deleted"];
    
        }
        else{
            return ["Error"=>"product deletion is failed"];
        }
    }
    public function getsingleproduct($id){
        return Product::find($id);

    }
    public function updateproduct(Request $request,$id){
        $product=Product::find($id);
        //print_r($id);exit;
        $product->update($request->all());
        //return $product;
      // $result = Product::where('id', $id)->update(array('name' => $request->input('name'),'price' =>$request->input('price'),'description' => $request->input('description'),'file_path' => $request->input('file')));
        //return $product;
    //     if($result){
    //         return ["Success"=>"product has been deleted"];
    
    //     }
    //     else{
    //         return ["Error"=>"product deletion is failed"];
    //     }
     }
}
