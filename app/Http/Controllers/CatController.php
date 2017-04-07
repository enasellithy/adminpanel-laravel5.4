<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use Session;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Cat::get();
        $cat = Cat::orderBy('created_at','desc')->paginate(5);
        return view('cpanel.cat.index',['title'=>'Category'],
        compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpanel.cat.create',['title'=>'Add New Category']);
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
            'arname' => 'required',
            'enname'  => 'required'
            ]);
            $cat = new Cat();
            $cat->arname = $request['arname'];
            $cat->enname = $request['enname'];
            //dd($cat);
            $cat->save();
            Session::flash('success','Category Added');
            return redirect()->route('cat.index');
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
        $cat = Cat::find($id);
        return view('cpanel.cat.edit',['title'=>'Edit Category'])->withCat($cat);
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
            'arname' => 'required',
            'enname'  => 'required'
            ]);
            $cat = Cat::find($id);
            $cat->arname = $request->arname;
            $cat->enname = $request->enname;
            $cat->save();
            Session::flash('success','Category Updated');
            return redirect()->route('cat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Cat::find($id);
        $cat->delete();
        Session::flash('success','Category Deleted');
        return redirect()->route('cat.index');
    }
}
