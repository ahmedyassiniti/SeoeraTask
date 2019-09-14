<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\Product;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $languages =Language::select('id', 'title')->orderby('title', 'asc')->pluck('title', 'id')->toArray();
          $products = Product::all();

          return view('products.index',compact('languages','products'));
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $languages =Language::select('id', 'title')->orderby('title', 'asc')->pluck('title', 'id')->toArray();
        return view('products.create',compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $this->validate($request,[
            

        ]);
          $this->validate($request,[
          'product_img'              => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
           'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'language_id'=>'required',

        ]);
        $product = new Product;
        $product->name = $request->input('name'); 
        $product->description = $request->input('description'); 
        $product->price = $request->input('price'); 
        $product->language_id = $request->input('language_id'); 
   
           if($request->hasfile('product_img')){
           
               $filenameext=$request->file('product_img')->getClientOriginalName();
               $extention=$request->file('product_img')->getClientOriginalExtension();
               $filename=pathinfo($filenameext,PATHINFO_FILENAME);
               $filenametostore=$filename.'_'.time().'.'.$extention;
               $image = $request->file('product_img'); //get the file
             
               $product->product_img = $filenametostore;
               $destinationPath = public_path('/images'); //public path folder dir
               $image->move($destinationPath, $filenametostore);  //mve to destination you mentioned 
             //  $image->save(); 

        }
        else{
            $filenametostore='nothing.jpg';
        }
           $product->save();
    $notification = array('title' => 'Data Store', 'body' => 'Product Created Succesfully');
      return redirect('/products')->with("success", $notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
         $languages =Language::select('id', 'title')->orderby('title', 'asc')->pluck('title', 'id')->toArray();
         return view('products.edit',compact('product','languages'));
             }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name'); 
        $product->description = $request->input('description'); 
        $product->price = $request->input('price'); 
        $product->language_id = $request->input('language_id'); 
        $product->save();
          
    $notification = array('title' => 'Data Store', 'body' => 'Product Updated Succesfully');
      return redirect('/products')->with("success", $notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $notification = array('title' => 'Data Delete', 'body' => 'Product Deleted Succesfully');
        return redirect('/products')->with("success", $notification);
    }
}
