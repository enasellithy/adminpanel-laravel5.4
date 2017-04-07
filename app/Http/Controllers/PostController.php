<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Cat;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::get();
        $post = Post::orderBy('created_at','asc')->paginate(10);
        return view('cpanel.post.index',['title'=>'Post'],
        compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Cat::all();
        return view('cpanel.post.create',['title'=>'Add New Post'],
        compact('cat'));
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
            'artitle' => 'required',
            'entitle'  => 'required', 
            'arbody'  => 'required',
            'enbody'  => 'required',
            'price' => 'required|numeric',
            'image' => 'required|mimes:jpeg,bmp,png,jpg'
            ]);
            $post = new Post();
            $post->artitle = $request['artitle'];
            $post->entitle = $request['entitle'];
            $post->arbody = $request['arbody'];
            $post->enbody = $request['enbody'];
            $post->price = $request['price'];
            if($request->hasFile('image')) 
            {
                $image = $request->file('image');
                $filename = time() . '.' .$image->getClientOriginalExtension();
                $location = public_path('images/slider/'.$filename);
                Image::make($image)->resize(400,400)->save($location);
                Image::make($image)->save($location);
                $post->image = $filename;
            }
            $post->cat_id = $request->cat_id;
            $post->save();
            Session::flash('success','Post Add');
            return redirect()->route('post.index');
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
        $cat = Cat::all();
        $post = Post::find($id);
        return view('cpanel.post.edit',['title'=>'Edit Post'],
        compact('cat'))->withPost($post);
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
            'artitle' => 'required',
            'entitle'  => 'required', 
            'arbody'  => 'required',
            'enbody'  => 'required',
            'price' => 'required|numeric',
            'image' => 'required|mimes:jpeg,bmp,png,jpg'
            ]);
            $post = Post::find($id);
            $post->artitle = $request->artitle;
            $post->entitle = $request->entitle;
            $post->arbody = $request->arbody;
            $post->enbody = $request->enbody;
            $post->price = $request->price;
            if($request->hasFile('image')) 
            {
                $image = $request->file('image');
                $filename = time() . '.' .$image->getClientOriginalExtension();
                $location = public_path('images/slider/'.$filename);
                Image::make($image)->resize(400,400)->save($location);
                Image::make($image)->save($location);
                $post->image = $filename;
            }
            $post->cat_id = $request->cat_id;
            $post->save();
            Session::flash('success','Post Update');
            return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success','Post Delete');
        return redirect()->route('post.index');
    }
}
