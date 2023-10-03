<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded =[];
    // protected $table = 'subjects';

    static public function getSingle($id)
    {
        return self::find($id);
    }
    

    static public function getRecord()
    {
        $return=subject::select('subjects.*', 'users.name as created_by_name')
                    ->join('users', 'users.id', 'subjects.created_by')
                    
                    ->orderBy('subjects.id', 'desc')
                    ->paginate(10);

            return $return;  
            // $return=$return->where('subjects.is_delete', '=', 0)      
    }

}
