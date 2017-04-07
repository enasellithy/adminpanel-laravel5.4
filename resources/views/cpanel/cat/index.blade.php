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
                  <i class="ti-server"></i>{{$cat->count()}}
              </div>
          </div>
          <div class="col-xs-12">
              <div class="numbers">
                 <a href="{{route('cat.create')}}" class="btn btn-info btn-lg">Add New Category</a>
<div class="col-md-12">
<table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th>Arabic</th>
        <th>English</th>
        <th>Create At</th>
        <th>control</th>
      </tr>
    </thead>
    <tbody>
        @foreach($cat as $c)
      <tr>
        <td>{{$c->arname}}</td>
        <td>{{$c->enname}}</td>
        <td>{{date('M j, Y ',strtotime($c->created_at))}}</td>
        <td>
             <a href="cat/{{$c->id}}/edit" class="btn btn-info">Edit</a>
             <a href="cat/{{$c->id}}/delete" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

              </div>
          </div>
      </div>
      <div class="footer">
       {!! $cat->links() !!}
      </div>
  </div>
  
</div>
</div>
    </div>
  </div>
</div>
@endsection