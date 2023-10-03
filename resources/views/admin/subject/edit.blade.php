@extends('admin.layouts.app')

@section('main-section')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <a href="{{route('classes.index')}}" class="btn btn-primary">All Subject</a>
        </div>
        <div class="card-header">
            <h4 class="card-title">Edit Data</h4>
        </div>
      
        <div class="card-body">
            @include('validate.error')
            @include('validate.success')
            
            <form action="{{ route('subject.update', $getRecord -> id) }}" method="POST">  
                @csrf
                @method('PUT')
               
            <div class="form-group">
                    <label>Name</label>
                    <input value="{{$getRecord ->name }}" name= "name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control" name="type" id="">
                        <option value="">Select Type</option>
                        <option {{($getRecord->type == 'theory') ? 'selected' : ''}} value="theory">Theory</option>
                        <option {{($getRecord->type == 'pactical') ? 'selected' : ''}} value="pactical">Pactical</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" id="">
                        <option {{($getRecord ->status == 0) ? 'selected' : ''}} value="0">Active</option>
                        <option {{($getRecord ->status== 1) ? 'selected' : ''}} value="1">InActive</option>
                    </select>
                </div>
              
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection