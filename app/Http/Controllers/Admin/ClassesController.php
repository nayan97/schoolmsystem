<?php

namespace App\Http\Controllers\Admin;

use App\Models\Classes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $classes['getRecord'] = Classes::getRecord();
        return view('admin.class.list',$classes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = new Classes();

    $data -> name = $request-> name;
    $data -> status = $request-> status;
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
        $data['getRecord'] = Classes::getSingle($id);
        if (!empty($data['getRecord'])) {

            $data['header_title'] ="Edit class";
            return view('admin.class.edit',$data);

        } else {
            abort(404);
        }
        
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =Classes::findOrFail($id);
       
        $data -> name = $request-> name;
        $data -> status = $request-> status;
        $data ->save();

        return redirect('/admin/classes')-> with('success', 'data updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sub =classes::findOrFail($id);

        $sub->delete();

        return redirect()->back()-> with('success', 'Data deleted successfuly');
    }
}
