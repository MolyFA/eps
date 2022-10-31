<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name',length:100);
            $table->string(column:'salary_advanced',length:50);
            $table->string(column:'monthly_salary',length:50);
            $table->string(column:'yearly_salary',length:100);
            $table->string(column:'bonus_salary',length:30);
            $table->string(column:'deduction_salary',length:30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payroll');
    }
};
