<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Featured;
use Carbon\Carbon;

class featuredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varFeatured = Featured::all();
        return view('backend.Featured.index',compact('varFeatured')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Featured.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            $createFeatured =  Featured::insertGetId([
                        'description' =>$request->description,
                        'created_at' => Carbon::now(),
            ]);
            return redirect()->route('featured.index')
                 ->with('success','Create successfully');
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
        $featuredEdit = Featured::findOrFail($id);
      return view('backend.Featured.edit',compact('featuredEdit'));

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
        $featuredEdit = Featured::find($id);
         $featuredEdit->description=$request->description;
         $featuredEdit->save();
         return redirect()->route('featured.index')->with('success','Update Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Featured::where('id',$id)->delete();
        return back()->with('success','Delete Succesfully');

    }
}
