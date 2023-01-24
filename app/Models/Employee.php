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

    public function EmployeeDepartment(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
}
