<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.product.create');
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
            'title' => 'required',
            'textarea' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'offer_price' => 'required',
            'status' => 'required',
                ]);
                if($request->hasFile('image')){
            $product_id =Product::insertGetId([
              			'title'=>$request->title,
                        'textarea'=>$request->textarea,
                        'quantity'=>$request->quantity,
                        'price'=>$request->price,
                        'offer_price'=>$request->offer_price,
                        'status'=>$request->status,
                        'created_at'=>Carbon::now(),
            ]);
            $path = $request->file('image')->store('imagestore');
            Product::find($product_id)->update([
              'image'=> $path
            ]);
            return redirect()->route('backend.product.create')
                 ->with('success','Create updated successfully');
          }
          else{
            Product::insert([
            	        'title'=>$request->title,
                        'textarea'=>$request->textarea,
                        'quantity'=>$request->quantity,
                        'price' =>$request->price,
                        'offer_price'=>$request->offer_price,
                        'status'=>$request->status,
                        'created_at'=>Carbon::now(),
            ]);
            return redirect()->route('backend.product.create')
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
