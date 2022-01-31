@extends('backend.layouts.app')
@push('style')
    
@endpush
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card m-auto">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-primary"">Edit User</h4>
          <div class="mb-3">
            @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
          </div>
          <form class="forms-sample" action="{{'/admin/edit-user/'.$user['id']}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="form-group row">
              <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" readonly name="email" class="form-control" id="exampleInputEmail2" value="{{$user->email }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
              <div class="col-sm-9">
                <input type="text" name="name" class="form-control" id="exampleInputUsername2" value="{{$user['name'] }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
              <div class="col-sm-9">
                <input type="text" name="mobile" class="form-control" id="exampleInputMobile" value="{{$user->mobile }}">
              </div>
            </div>
            @if (Auth::guard('admin')->user()->type=='super_admin')
            <div class="form-group row">
              <label for="exampleInputMobile" class="col-sm-3 col-form-label">Role</label>
              <div class="col-sm-9">
                <select name="type" id="Type" class="form-control">
                       <option>Select Option</option>
                       <option @if ($user->type=='super_admin') selected @endif value="super_admin">Super admin</option>
                       <option @if ($user->type=='admin') selected readonly @endif value="admin" value="Admin">Admin</option>
                       <option @if ($user->type=='editor') selected readonly @endif value="editor" value="Editor">Editor</option>
                </select>
              </div>
            </div>
            @else
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">User Role</label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control" id="exampleInputUsername2" value="{{$user['type'] }}">
              </div>
            </div>
            @endif
            <div class="form-group row">
              <label for="Image" class="col-sm-3 col-form-label">Image</label>
              <div class="col-sm-9">
                <img class="m-auto" style="height: 100px; margin-top:15px; border-radius:50%" src="{{asset('storage/images/admin/avatar/'.$user->image)}}" alt="No image" srcset="">
              </div>
            </div>
            <div class="form-group row">
              <label for="Image" class="col-sm-3 col-form-label">Change</label>
              <div class="col-sm-9">
                <input type="file" name="image" class="form-control" id="Image">
              </div>
            </div>
            <button id="Edit" type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{url('admin/all-users')}}" class="btn btn-light">Cancel</a>
        </div>
      </div>
    </div>
  </div>
 
</div>
  <!-- content-wrapper ends -->
@stop

@push('script')

@endpush
