<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlySalary extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    
    public function bonus(){
        return $this->belongsTo(Bonus::class);
    }
    
    public function deduction(){
        return $this->belongsTo(Deduction::class);
    }
}

