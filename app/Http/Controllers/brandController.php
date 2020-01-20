<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Carbon\Carbon;
class brandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varBrand = Brand::all();
        return view('backend.Brand.index',compact('varBrand')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Brand.create');
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
            $createBrand =  Brand::insertGetId([
              			'name' =>$request->name,
                        'description' =>$request->description,
                        'created_at' => Carbon::now(),
            ]);
            $path = $request->file('image')->store('imagestore/catagory/Brand');
            Brand::find($createBrand)->update([
              'image'=> $path
            ]);
            return redirect()->route('brand.index')
                 ->with('success','Updated successfully');
          }
          else{
            Brand::insert([
             'name' =>$request->name,
            'description' =>$request->description,
              'created_at' => Carbon::now(),
            ]);
            return redirect()->route('brand.index')
                 ->with('success','Updated successfully');
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
        $brandEdit = Brand::findOrFail($id);
      return view('backend.Brand.edit',compact('brandEdit'));

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
        Brand::where('id',$id)->update([
            'name'    =>$request->name,
            'description'    =>$request->description,
            'created_at' => Carbon::now(),
          ]);
          $path = $request->file('image')->store('imagestore/catagory/Brand');
          Brand::find($id)->update([
            'image'=> $path
          ]);
          return redirect()->route('brand.index')->with('success','Update Succesfully');
        }
        else{
            Brand::where('id',$id)->update([
             'name'    =>$request->name,
            'description'    =>$request->description,
            'created_at' => Carbon::now(),
          ]);
         return redirect()->route('brand.index')->with('success','Update Succesfully');
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
       Brand::where('id',$id)->delete();
        return back()->with('success','Delete Succesfully');

    }
}
