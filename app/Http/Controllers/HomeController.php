<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Language;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $languages =Language::select('id', 'title')->orderby('title', 'asc')->pluck('title', 'id')->toArray();
      $products = Product::where('language_id','2')->get();;
      return view('home',compact('languages','products'));
    }

    public function languageFilter(Request $request)
    {
        
        $products=Product::where('language_id',$request->language)->get();
        $languages =Language::select('id', 'title')->orderby('title', 'asc')->pluck('title', 'id')->toArray();
        return view('home',compact('products','languages'));
    }
}
