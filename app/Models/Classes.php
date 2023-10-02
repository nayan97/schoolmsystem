<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';

    static public function getRecord()
    {
        $return=Classes::select('classes.*', 'users.name as created_by_name')
                    ->join('users', 'users.id', 'classes.created_by');

                    if(!empty(Request::get('name')))
                    {
                        $return=$return->where('classes.name', 'like','%' .Request::get('name').'%');
                    }
                    


                    $return=$return->where('classes.trash', '=', 0)
                    ->orderBy('classes.id', 'desc')
                    ->paginate(10);

            return $return;        
    }

    static public function getSingle($id)
    {
        return self::find($id);
    }
}
