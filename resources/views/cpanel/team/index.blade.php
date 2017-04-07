@extends('cpanel.layouts.app')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-sm-12">
        @if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
@if(count($errors) > 0)
 <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
 </div>
</div>
@endif 
<div class="card">
  <div class="content">
      <div class="row">
          <div class="col-xs-5">
              <div class="icon-big icon-warning text-center">
                  <i class="ti-server"></i>{{$team->count()}}
              </div>
          </div>
          <div class="col-xs-12">
              <div class="numbers">
                 <a href="{{route('team.create')}}" class="btn btn-info btn-lg">Add New Team</a>
@foreach($team as $t)
<div class="col-md-12">
  <div>{{$t->name}}</div>
  <div>{{$t->job}}</div>
  <div>{{$t->flink}}</div>
  <div>{{$t->tlink}}</div>
  <div>{{$t->inlink}}</div>
  <div>{{date('M j, Y ',strtotime($t->created_at))}}</div>
  @if($t->active == 0)
  <div class="col-md-4">
    <a href="team/{{$t->id}}/active" class="btn btn-success">Active</a>
  </div>
  @else
  <div class="col-md-4">
    <a href="team/{{$t->id}}/noactive" class="btn btn-success">No Actine</a>
  </div>
  @endif
  <div class="col-md-4">
    <a href="team/{{$t->id}}/edit" class="btn btn-info">Edit</a>
  </div>
  <div class="col-md-4">
    <a href="team/{{$t->id}}/delete" class="btn btn-danger">Delete</a>
  </div>
</div>
@endforeach
              </div>
          </div>
      </div>
      <div class="footer">
       
      </div>
  </div>
  
</div>
</div>
    </div>
  </div>
</div>
@endsection