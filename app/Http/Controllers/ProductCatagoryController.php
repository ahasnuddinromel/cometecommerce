<?php

namespace App\Http\Controllers;

use App\Models\ProductCatagory;
use Illuminate\Http\Request;

class ProductCatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = ProductCatagory:: all();
       return view('admin.product.catagory.catagory', [
           'cata_data'  => $data
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       ProductCatagory::create([
        'catagory_name'   => $request -> catagory_name
       ]);
       return redirect() -> route('cata.index') -> with('success', 'Catagory Added Successfull');
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
        $edit_cata = ProductCatagory::find($id);
        return [
            'cata_id'  =>  $edit_cata-> id,
            'cata_id'  =>  $edit_cata-> id,
            'catagory_name'  =>  $edit_cata-> catagory_name           
        ];
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
        $catagory_edit = ProductCatagory::find($request->cata_id);
        $catagory_edit->  catagory_name  = $request -> catagory_name;        
        $catagory_edit-> update();
        return redirect() -> route('cata.index') -> with('success', 'Catagory Updated Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ProductCatagory::find($id);
        $delete -> delete();       
        return redirect() -> route('cata.index') -> with('success', 'Catagory Deleted successful');
    }
}
