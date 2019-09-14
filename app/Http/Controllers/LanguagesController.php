<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();
        return view('languages.index')->with('languages',$languages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('languages.create');
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
          'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
          'title'=>'required',
          'solgan'=>'required',
            
        ]);
              $language = new Language;
              $language->title = $request->input('title'); 
              $language->slogan = $request->input('solgan');

             if($request->hasfile('img')){
              
               $filenameext=$request->file('img')->getClientOriginalName();
               $extention=$request->file('img')->getClientOriginalExtension();
               $filename=pathinfo($filenameext,PATHINFO_FILENAME);
               $filenametostore=$filename.'_'.time().'.'.$extention;
               $image = $request->file('img'); //get the file
             
               $language->img = $filenametostore;
               $destinationPath = public_path('/images'); //public path folder dir
               $image->move($destinationPath, $filenametostore);  //mve to destination you mentioned 
             //  $image->save(); 

        }
        else{
            $filenametostore='nothing.jpg';
        } 
              $language->save();
          
            $notification = array('title' => 'Data Store', 'body' => 'Language Created Succesfully');
            return redirect('/languages')->with("success", $notification);
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
         $language = Language::find($id);
         return view('languages.edit')->with('language',$language);
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
            $language = Language::find($id);
            $language->title = $request->input('title'); 
            $language->slogan = $request->input('solgan'); 
            $language->save();
          
            $notification = array('title' => 'Data Store', 'body' => 'Language Updated Succesfully');
            return redirect('/languages')->with("success", $notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        $language->delete();
        $notification = array('title' => 'Data Delete', 'body' => 'Language Deleted Succesfully');
        return redirect('/languages')->with("success", $notification);
    }
}
