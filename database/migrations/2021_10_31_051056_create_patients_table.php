<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table ->string('fname')->nullable();
            $table ->string('lname')->nullable();
            $table->string('nationalcode','15')->unique()->nullable();
            $table->boolean('sex')->nullable();
            $table->string('age','10')->nullable();
            $table->boolean('married')->nullable();
            $table->string('mobile','15')->nullable();
            $table->bigInteger('users_id')->nullable();
            $table->string('mainid')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
