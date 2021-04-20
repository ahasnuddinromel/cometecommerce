<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $slider_data = Slider::all();
       return view('admin.company.slider.index', [
           'slider_data' => $slider_data
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
        $unique_name = '';
        if($request-> hasFile('slider_image')){
            $img = $request ->file('slider_image');
            $unique_name = md5(time(). rand()).'.'. $img-> getClientOriginalExtension();
            $img -> move(public_path('frontend/assets/images/slider/'), $unique_name);
        }
       Slider::create([
           'slider_title'   => $request -> slider_title,
           'slider_discription'   => $request -> slider_discription,
           'slider_image'   => $unique_name
       ]);
       return redirect() -> route('slider.index') -> with('success', 'Slider Added Successfull');
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
      $edit_dlider = Slider::find($id);
      return [
          'id'  =>  $edit_dlider-> id,
          'slider_title'  =>  $edit_dlider-> slider_title,
          'slider_discription'  =>  $edit_dlider-> slider_discription,
          'slider_image'  =>  $edit_dlider-> slider_image,
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
        $edit_id = $request -> edit_id;

        $slider_edit = Slider::find($edit_id);

        $unique_name = '';
        if($request -> hasFile('new_slider_image')){
            $img = $request->file('new_slider_image');
            $unique_name = md5(rand().time()).'.'.$img->getClientOriginalExtension();
            $img -> move(public_path('frontend/assets/images/slider/'),  $unique_name);           
            unlink(public_path('frontend/assets/images/slider/' .  $slider_edit->slider_image ));  
        }else{
            $unique_name = $slider_edit -> slider_image;
        }
        
        
        $slider_edit->  slider_title            = $request -> slider_title;
        $slider_edit-> slider_discription   = $request -> slider_discription;
        $slider_edit-> slider_image          =  $unique_name;
        $slider_edit-> update();
        return redirect() -> route('slider.index') -> with('success', 'Slider Updated Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Slider::find($id);
        $delete -> delete();
        unlink(public_path('frontend/assets/images/slider/' .  $delete->slider_image ));  
        return redirect() -> route('slider.index') -> with('success', 'Slider Deleted successful');
    }
}
