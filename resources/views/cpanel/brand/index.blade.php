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
                  <i class="ti-server"></i>{{$brand->count()}}
              </div>
          </div>
          <div class="col-xs-7">
              <div class="numbers">
                 <form class="form-horizontal"  
                  action="{{route('brand.store')}}" 
                  method="post"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="brandimage">Image Brand</label>
                    <div class="col-sm-10"> 
                      <input type="file" name="brandimage" class="form-control" id="brandimage" />
                    </div>
                  </div>
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Add New Service</button>
                    </div>
                  </div>
                  <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
              </div>
          </div>
      </div>
      <div class="footer">
          <hr />
          <div class="stats">
            @foreach($brand as $p)
<div class="col-md-12">
  <div>
    <img width="250" height="100" src="{{url('public/images/brand/'.$p->brandimage)}}"> 
  </div>
  <div>{{date('M j, Y ',strtotime($p->created_at))}}</div>
  @if($p->active == 0)
  <div class="col-md-4">
    <a href="brand/{{$p->id}}/active" class="btn btn-success">Active</a>
  </div>
  @else
  <div class="col-md-4">
    <a href="brand/{{$p->id}}/noactive" class="btn btn-success">No Actine</a>
  </div>
  @endif
  <div class="col-md-4">
    <a href="brand/{{$p->id}}/delete" class="btn btn-danger">Delete</a>
  </div>
</div>
<hr>
@endforeach  
          </div>
      </div>
  </div>
</div>
</div>
    </div>
  </div>
</div>
@endsection