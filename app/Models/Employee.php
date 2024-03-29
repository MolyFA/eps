<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;
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
