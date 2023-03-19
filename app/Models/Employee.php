<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    protected $guarded=[];

    function salary(){
        return $this->belongsTo(Salary::class);
    }

    public function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function designation(){
        return $this->belongsTo(Designation::class);
    }


    function user(){
        return $this->belongsTo(User::class);
    }
}
