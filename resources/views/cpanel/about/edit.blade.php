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
          <form class="form-horizontal"  
                  action="{{url('about/'.$about->id.'/update')}}" 
                  method="post"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="date_title">Date Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="datetitle" value="{{$about->datetitle}}" class="form-control" id="date_title" placeholder="Enter Date Title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="title">Title</label>
                    <div class="col-sm-10">
                      <input type="text" value="{{$about->title}}" name="title" class="form-control" id="title" placeholder="Enter Title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="body">Body</label>
                    <div class="col-sm-10"> 
                      <textarea class="form-control" name="body" id="body" rows="15">
                        {{$about->body}}
                      </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="about_image">Image About</label>
                    <div class="col-sm-10"> 
                      <input type="file" name="about_image" value="{{$about->about_image}}" class="form-control" id="about_image" />
                    </div>
                  </div>
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Save</button>
                    </div>
                  </div>
                  <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
      </div>
      <div class="footer">
         <a href="{{route('about.index')}}">Go Back</a>
      </div>
  </div>
  
</div>
</div>
    </div>
  </div>
</div>
@endsection