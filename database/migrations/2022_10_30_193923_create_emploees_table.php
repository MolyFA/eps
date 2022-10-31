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
        Schema::create('emploees', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name',length: 50);
            $table->string(column:'phone_number',length: 20);
            $table->string(column:'email',length:25);
            $table->text(column:'address',);
            $table->string(column:'gender',length:10);
            $table->digit(column:'age',length:5);
            $table->text(column:'position',);
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
        Schema::dropIfExists('emploees');
    }
};
