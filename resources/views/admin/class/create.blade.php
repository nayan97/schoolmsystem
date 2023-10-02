@extends('admin.layouts.app')

@section('main-section')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <a href="{{route('classes.index')}}" class="btn btn-primary">All Class</a>
        </div>
        <div class="card-header">
            <h4 class="card-title">Add new</h4>
        </div>
      
        <div class="card-body">
            @include('validate.error')
            @include('validate.success')
            <form action="{{ route ('classes.store')}}" method="POST">
               @csrf
                <div class="form-group">
                    <label>Class Name</label>
                    <input value="{{ old('name') }}" name= "name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" id="">
                        <option value="0">Active</option>
                        <option value="1">InActive</option>
                    </select>
                </div>
            
              
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection