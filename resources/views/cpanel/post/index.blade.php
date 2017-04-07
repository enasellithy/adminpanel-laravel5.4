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
                  <i class="ti-server"></i>{{$post->count()}}
              </div>
          </div>
          <div class="col-xs-12">
              <div class="numbers">
                 <a href="{{route('post.create')}}" class="btn btn-info btn-lg">Add New Post</a>
@foreach($post as $p)
<div class="col-md-12">
  <div class="col-md-6">{{$p->ar_title}}</div>
  <div class="col-md-6">{{$p->en_title}}</div>
  <div class="col-md-6">{{$p->price}}</div>
  <div class="col-md-6">{{App\Cat::find($p->cat_id)->name}}</div>
  <div>{{date('M j, Y ',strtotime($p->created_at))}}</div>
  <div class="col-md-4">
    <a href="post/{{$p->id}}/edit" class="btn btn-info">Edit</a>
  </div>
  <div class="col-md-4">
    <a href="post/{{$p->id}}/delete" class="btn btn-danger">Delete</a>
  </div>
</div>
<hr>
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