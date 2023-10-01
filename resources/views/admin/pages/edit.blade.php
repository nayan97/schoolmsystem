@extends('admin.layouts.app')

@section('main-section')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.index')}}" class="btn btn-primary">All Staff</a>
        </div>
        <div class="card-header">
            <h4 class="card-title">Add new</h4>
        </div>
      
        <div class="card-body">
            @include('validate.error')
            @include('validate.success')
            <form action="{{ route ('admin.store')}}" method="POST">
                @csrf
            <div class="form-group">
                    <label>Name</label>
                    <input value="{{$data ->name }}" name= "name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input value="{{$data ->email}}" name="email" type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input value="" name="password" type="password" class="form-control">
                </div>
              
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection