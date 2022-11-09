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
        Schema::create('emplpoyees', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('phone_number',20);
            $table->string('email',25);
            $table->text('address',);
            $table->string('gender',10);
            $table->string('age',5);
            $table->text('designation',);
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
        Schema::dropIfExists('emplpoyees');
    }
};
