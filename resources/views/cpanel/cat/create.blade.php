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
          <div class="col-lg-12">
             <form class="form-horizontal"  
                  action="{{route('cat.store')}}" 
                  method="post"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="arname">Arabic Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="arname" class="form-control" id="arname" placeholder="Enter Arabic Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="enname">English Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="enname" class="form-control" id="enname" placeholder="Enter English Name">
                    </div>
                  </div>
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Add New Category</button>
                    </div>
                  </div>
                  <input type="hidden" value="{{Session::token()}}" name="_token">
            </form> 
          </div>
      </div>
      <div class="footer">
          <a href="{{route('cat.index')}}">Go Back</a>
      </div>
      </div>
  </div>
</div>
</div>
    </div>
  </div>
</div>
@endsection