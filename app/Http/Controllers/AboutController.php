<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::get();
        $about = About::orderBy('created_at','asc')->paginate(10);
        return view('cpanel.about.index',['title'=>'About'],
            compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpanel.about.create',['title'=>'Create New About']);
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
            'datetitle' => 'required',
            'title'  => 'required', 
            'body'  => 'required',
            'about_image' => 'required|mimes:jpeg,bmp,png,jpg'
            ]);
        $about = new About();
        $about->datetitle = $request['datetitle'];
        $about->title = $request['title'];
        $about->body = $request['body'];
        if($request->hasFile('about_image')) 
        {
            $about_image = $request->file('about_image');
            $filename = time() . '.' .$about_image->getClientOriginalExtension();
            $location = public_path('images/about/'.$filename);
            Image::make($about_image)->resize(400,400)->save($location);
            Image::make($about_image)->save($location);
            $about->about_image = $filename;
        }
        $about->save();
        Session::flash('success','About Add');
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
        $about = About::find($id);
        return view('cpanel.about.edit')->withAbout($about);
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
            'date_title' => 'required',
            'title'  => 'required',
            'body'  => 'required',
            'about_image' => 'required|mimes:jpeg,bmp,png,jpg'
            ]);
        $about = About::find($id);
        $about->date_title = $request->date_title;
        $about->title = $request->title;
        $about->body = $request->body;
        if($request->hasFile('about_image')) 
        {
            $about_image = $request->file('about_image');
            $filename = time() . '.' .$about_image->getClientOriginalExtension();
            $location = public_path('images/about/'.$filename);
            Image::make($about_image)->resize(400,400)->save($location);
            Image::make($about_image)->save($location);
            $about->about_image = $filename;
        }
        $about->save();
        Session::flash('success','About Updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();
        Session::flash('success','About Dleted');
        return redirect()->back();
    }
    
    public function active($id)
    {
        $about = About::find($id);   
        $about->active = 1;
        $about->save();
        Session::flash('success','About Active');
        return redirect()->back();
    }
    public function noactive($id)
    {
        $about = About::find($id);   
        $about->active = 0;
        $about->save();
        Session::flash('success','About No Active');
        return redirect()->back();
    }
}
