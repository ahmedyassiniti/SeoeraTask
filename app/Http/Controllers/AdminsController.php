<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Language;
use App\Admin;
use App\User;
use DB;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $languages =Language::select('id', 'title')->orderby('title', 'asc')->pluck('title', 'id')->toArray();
        return view('admins.create',compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'language_id'=>'required',

        ]);
        $admin = new Admin;
        $admin->name = $request->input('name'); 
        $admin->email = $request->input('email'); 
        $admin->password = Hash::make($request->input('password')); 
        $admin->language_id = $request->input('language_id'); 
        $admin->save();
        $notification = array('title' => 'Data Store', 'body' => 'Admin Created Succesfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
