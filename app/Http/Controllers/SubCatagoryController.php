<?php

namespace App\Http\Controllers;

use App\Models\SubCatagory;
use Illuminate\Http\Request;

class SubCatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_cata_data = SubCatagory::all();
        return view('admin.product.catagory.subcatagory', [
            'sub_cata_data' => $sub_cata_data
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
        SubCatagory::create([          
            'product_catagorie_id'   => $request -> product_catagorie_id,
            'sub_catagory_name'   => $request -> sub_catagory_name,
          
        ]);
        return redirect() -> route('subcatagory.index') -> with('success', 'Slider Added Successfull');
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
        $edit_sub_cata = SubCatagory::find($id);
      return [
          'sub_catagory_id'  =>  $edit_sub_cata-> id,
          'product_catagorie_id'  =>  $edit_sub_cata-> product_catagorie_id,
          'sub_catagory_name'  =>  $edit_sub_cata-> sub_catagory_name,         
          
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
        $sub_cata_id = $request -> sub_catagory_id;
        $cata_edit = SubCatagory::find($sub_cata_id);
        $cata_edit->  sub_catagory_name      = $request -> sub_catagory_name;       
        $cata_edit-> update();
        return redirect() -> route('subcatagory.index') -> with('success', 'Sub Catagory Updated Successfull');
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
