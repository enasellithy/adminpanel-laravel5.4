<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::get();
        $brand = Brand::orderBy('created_at','asc')->paginate(10);
        return view('cpanel.brand.index',['title'=>'Brand'],
        compact('brand'));
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
        $this->Validate($request,[ 
            'brandimage' => 'required|mimes:jpeg,bmp,png,jpg'
            ]);
        $brand = new Brand();
        if($request->hasFile('brandimage'))
        {
            $brandimage = $request->file('brandimage');
            $filename = time() . '.' .$brandimage->getClientOriginalExtension();
            $location = public_path('images/brand/'.$filename);
            Image::make($brandimage)->resize(400,400)->save($location);
            Image::make($brandimage)->save($location);
            $brand->brandimage = $filename;
        }
        $brand->save();
        Session::flash('success','Brand Add');
        return redirect()->back();
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
        $brand = Brand::find($id);
        $brand->delete();
        Session::flash('success','Brand Deleted');
        return redirect()->back();
    }
    public function active($id)
    {
        $brand = Brand::find($id);   
        $brand->active = 1;
        $brand->save();
        Session::flash('success','Brand Active');
        return redirect()->back();
    }
    public function noactive($id)
    {
        $brand = Brand::find($id);   
        $brand->active = 0;
        $brand->save();
        Session::flash('success','Brand No Active');
        return redirect()->back();
    }
}
