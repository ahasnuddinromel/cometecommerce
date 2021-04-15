<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CompanyInfo::all();
       return view('admin.company.index', [
        'com_data'  =>  $data
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
        //
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
        $data = CompanyInfo::find($id);
        $unique_name = '';
        if($request ->hasFile( 'new_company_logo')){
            $img = $request -> file('new_company_logo');
            $unique_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();
            $img -> move(public_path('/frontend/assets/images'),  $unique_name);
            unlink(public_path('images/' .  $data -> company_logo ));  
        }else{
            $unique_name = $data -> company_logo;
        }
       
        

        $data -> title                            = $request -> title;
        $data -> company_name           = $request -> company_name;
        $data -> company_logo            = $unique_name;
        $data -> email                          = $request -> email;
        $data -> phone_number            = $request -> phone_number;
        $data -> slogan                        = $request -> slogan;
        $data -> company_discription  = $request -> company_discription;
        $data -> company_address       = $request -> company_address;
        $data -> location_url               = $request -> location_url;
        $data -> update();
        return redirect() -> route('company.index') -> with('success', 'Information Updated Successfull');

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
