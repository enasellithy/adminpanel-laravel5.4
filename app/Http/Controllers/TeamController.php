<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::get();
        $team = Team::orderBy('created_at','asc')->paginate(6);
        return view('cpanel.team.index',['title'=>'Team'],
            compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpanel.team.create',['title'=>'Add Team']);
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
            'name' => 'required',
            'job'  => 'required',
            'flink' => 'required',
            'tlink' => 'required',
            'inlink' => 'required',
            'teamimage' => 'required|mimes:png,jpeg,jpg'
            ]);
        $team = new Team();
        $team->name = $request['name'];
        $team->job = $request['job'];
        $team->flink = $request['flink'];
        $team->tlink = $request['tlink'];
        $team->inlink = $request['inlink'];
        if($request->hasFile('teamimage'))
        {
            $teamimage = $request->file('teamimage');
            $filename = time() . '.' .$teamimage->getClientOriginalExtension();
            $location = public_path('images/team/'.$filename);
            Image::make($teamimage)->resize(400,400)->save($location);
            Image::make($teamimage)->save($location);
            $team->teamimage = $filename;
        }
        $team->save();
        Session::flash('success','Team Add');
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
        $team = Team::find($id);
        return view('cpanel.team.edit')->withTeam($team);
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
            'name' => 'required',
            'job'  => 'required',
            'flink' => 'required',
            'tlink' => 'required',
            'inlink' => 'required',
            'teamimage' => 'required|mimes:png,jpeg,jpg'
            ]);
        $team = Team::find($id);
        $team->name = $request->name;
        $team->job = $request->job;
        $team->flink = $request->flink;
        $team->tlink = $request->tlink;
        $team->inlink = $request->inlink;
        if($request->hasFile('teamimage'))
        {
            $teamimage = $request->file('teamimage');
            $filename = time() . '.' .$teamimage->getClientOriginalExtension();
            $location = public_path('images/team/'.$filename);
            Image::make($teamimage)->resize(400,400)->save($location);
            Image::make($teamimage)->save($location);
            $team->teamimage = $filename;
        }
        $team->save();
        Session::flash('success','Team Update');
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
        $team = Team::find($id);
        $team->delete();
        Session::flash('success','Team Deleted');
        return redirect()->back();
    }
    
    public function active($id)
    {
        $team = Team::find($id);   
        $team->active = 1;
        $team->save();
        Session::flash('success','Team Active');
        return redirect()->back();
    }

    public function noactive($id)
    {
        $team = Team::find($id);   
        $team->active = 0;
        $team->save();
        Session::flash('success','Team No Active');
        return redirect()->back();
    }
}
