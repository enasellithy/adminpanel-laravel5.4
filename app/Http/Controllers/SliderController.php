<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::get();
        $sliders = Slider::orderBy('created_at','desc')->paginate(3);
        return view('cpanel.slider.index',['title'=>'Slider'],
        compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpanel.slider.create',['title'=>'Create New Slider']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->Validate($request,[ 
            'heading' => 'required',
            'sub_title'  => 'required', 
            'body'  => 'required',
            'imageslide' => 'required|mimes:jpeg,bmp,png,jpg'
            ]);
        $slider = new Slider();
        $slider->heading = $request['heading'];
        $slider->sub_title = $request['sub_title'];
        $slider->body = $request['body'];
        if($request->hasFile('imageslide')) 
        {
            $imageslide = $request->file('imageslide');
            $filename = time() . '.' .$imageslide->getClientOriginalExtension();
            $location = public_path('images/slider/'.$filename);
            Image::make($imageslide)->resize(400,400)->save($location);
            Image::make($imageslide)->save($location);
            $slider->imageslide = $filename;
        }
        $slider->save();
        Session::flash('success','Slider Added');
        return redirect()->route('slide.index');
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
        $slider = Slider::find($id);
        return view('cpanel.slider.edit')->withSlider($slider);
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
         $this->Validate($request,[ 
            'heading' => 'required',
            'sub_title'  => 'required', 
            'body'  => 'required',
            'imageslide' => 'required|mimes:jpeg,bmp,png,jpg'
            ]);
            $slider = Slider::find($id);
            $slider->heading = $request->heading;
            $slider->sub_title = $request->sub_title;
            $slider->body = $request->body;
        if($request->hasFile('imageslide')) 
        {
            $imageslide = $request->file('imageslide');
            $filename = time() . '.' .$imageslide->getClientOriginalExtension();
            $location = public_path('images/slider/'.$filename);
            Image::make($imageslide)->resize(400,400)->save($location);
            Image::make($imageslide)->save($location);
            $slider->imageslide = $filename;
        }
        $slider->save();
        Session::flash('success','Slider Updated');
        return redirect()->route('slide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        Session::flash('success','Slider Dleted');
        return redirect()->route('slide.index');
    }
    
    public function active($id)
    {
        $slider = Slider::find($id);
        $slider->active = 1;
        $slider->save();
        Session::flash('success','Slider Active');
        return redirect()->route('slide.index');
    }
    
    public function noactive($id)
    {
        $slider = Slider::find($id);
        $slider->active = 0;
        $slider->save();
        Session::flash('success','Slider No Active');
        return redirect()->route('slide.index');
    }
}
