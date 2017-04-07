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
                  action="{{route('post.store')}}" 
                  method="post"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="artitle">Arabic Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="artitle" class="form-control" id="artitle" placeholder="Enter Arabic Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="entitle">English Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="entitle" class="form-control" id="entitle" placeholder="Enter English Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="arbody">Arabic Text</label>
                    <div class="col-sm-10">
                        <textarea name="arbody" class="form-control" col="10" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="enbody">English Text</label>
                    <div class="col-sm-10">
                        <textarea name="enbody" class="form-control" col="10" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="price">Price</label>
                    <div class="col-sm-10">
                      <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="image">Image</label>
                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control" id="image">
                    </div>
                  </div>
                  <div class="form-group">
              <label class="control-label col-sm-2" for="cat_id">Category</label>
              <div class="col-sm-10">
              <select name="cat_id" class="form-control">
                @foreach($cat as $c)
                <option value="{{$c->id}}">{{$c->enname}}</option>
                @endforeach
              </select>
            </div>
            </div>
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Add New Post</button>
                    </div>
                  </div>
                  <input type="hidden" value="{{Session::token()}}" name="_token">
            </form> 
          </div>
      </div>
      <div class="footer">
          <a href="{{route('post.index')}}">Go Back</a>
      </div>
      </div>
  </div>
</div>
</div>
    </div>
  </div>
</div>
@endsection