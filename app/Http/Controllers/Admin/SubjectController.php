<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject['getRecord'] = Subject::getRecord();
        return view('admin.subject.list',$subject);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Subject();

        $data -> name = $request-> name;
        $data -> status = $request-> status;
        $data -> type = $request-> type;
        $data -> created_by = Auth::user()->id;
    
        $data->save();
    
        return redirect()->back()-> with('success', 'data added successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['getRecord'] = subject::getSingle($id);
        if (!empty($data['getRecord'])) {

            $data['header_title'] ="Edit subject";
            return view('admin.subject.edit',$data);

        } else {
            abort(404);
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request )
    {
        $data =subject::findOrFail($id);

        $data -> name = $request-> name;
        $data -> status = $request-> status;
        $data -> type = $request-> type;
    
        $data->save();
    
        return redirect()->back()-> with('success', 'data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     // $data =subject::findOrFail($id);

    //     // $sub->delete();
    //     // return redirect()->back()-> with('success', 'data updated successfully');
    // }


        public function delete($id)
        {
        $sub =subject::findOrFail($id);
          
        $sub->delete();
        return redirect()->back()-> with('success', 'data updated successfully');
        }


}
