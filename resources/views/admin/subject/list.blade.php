@extends('admin.layouts.app')

@section('main-section')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="col-md-10">
                <h4 class="card-title">Default Datatable</h4>
                <p class="card-text">
                    This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
                </p>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary" style="text-align: right" href="{{route('subject.create')}}">Add New Subect</a>
            </div>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="datatable table table-stripped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 202.625px;">Sl No</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 315.844px;">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 315.844px;">Type</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 146px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 67.0469px;">Created By</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 67.0469px;">Created At</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 136.109px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>        
                        
                        @foreach ($getRecord as $user )
                            <tr role="row" class="odd">
                                <td>{{$loop ->index + 1}}</td>
                                <td class="sorting_1">{{$user->name}}</td>
                                <td>{{$user->type}}</td>
                                <td>
                                    @if ($user->status ==0)
                                       Active 
                                    @else
                                     Inactive   
                                    @endif
                                </td>
                                <td>{{$user->created_by_name}}</td>
                                <td>{{$user-> created_at -> diffForHumans()}}</td>
                                <td>
                                    <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                    <a class="btn btn-sm btn-warning" href="{{ route('subject.edit', $user -> id)}}"><i class="fe fe-edit"></i></a>
                                    <a class="btn btn-sm btn-danger" href="{{ route('subject.destroy', $user -> id)}}"><i class="fe fe-trash"></i></a>
                                </td>
                       
                            
                             </tr>
                        @endforeach
                    </tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 30 entries</div>
            </div>
                <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                        {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    
                        </div>
                   
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection