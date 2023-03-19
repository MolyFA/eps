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
        Schema::create('leave_applies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained("employees");
            $table->date('date');
            $table->string('tittle');
            $table->string('letter');
            $table->string("status")->default("pending");
            $table->foreignId('leavetype_id')->constrained("leave_types");
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
        Schema::dropIfExists('leave_applies');
    }
};
