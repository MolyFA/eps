<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApply extends Model
{
    use HasFactory;
    protected $guarded=[];

    function employee(){
        return $this->belongsTo(Employee::class);
    }

    function leavetype(){
        return $this->belongsTo(LeaveType::class,'leavetype_id','id');
    }




}
