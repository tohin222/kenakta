<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use Carbon\Carbon;

class catagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varCatagory = Catagory::all();
        return view('backend.catagory.index',compact('varCatagory')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required'
                ]);
                if($request->hasFile('image')){
            $createCatagory =  Catagory::insertGetId([
              			'name' =>$request->name,
                        'description' =>$request->description,
                        'created_at' => Carbon::now(),
            ]);
            $path = $request->file('image')->store('imagestore/catagory');
            Catagory::find($createCatagory)->update([
              'image'=> $path
            ]);
            return redirect()->route('catagory.index')
                 ->with('success','Create updated successfully');
          }
          else{
            Catagory::insert([
             'name' =>$request->name,
            'description' =>$request->description,
              'created_at' => Carbon::now(),
            ]);
            return redirect()->route('catagory.index')
                 ->with('success','Create updated successfully');
            }

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
        $catagoryEdit = Catagory::findOrFail($id);
      return view('backend.catagory.edit',compact('catagoryEdit'));

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
        $id = $request->id;
        if($request->hasFile('image')){
        Catagory::where('id',$id)->update([
            'name'    =>$request->name,
            'description'    =>$request->description,
            'created_at' => Carbon::now(),
          ]);
          $path = $request->file('image')->store('imagestore/catagory');
          Catagory::find($id)->update([
            'image'=> $path
          ]);
          return redirect()->route('catagory.index')->with('success','Update Succesfully');
        }
        else{
            Catagory::where('id',$id)->update([
             'name'    =>$request->name,
            'description'    =>$request->description,
            'created_at' => Carbon::now(),
          ]);
         return redirect()->route('catagory.index')->with('success','Update Succesfully');
        } 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Catagory::where('id',$id)->delete();
        return back()->with('success','Delete Succesfully');

    }
}
