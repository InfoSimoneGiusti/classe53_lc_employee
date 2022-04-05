<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            //nome, cognome, matricola, email, ruolo, foto, livello
            $table->string('name', 100);
            $table->string('lastname', 100);
            $table->string('badge_number', 20)->unique();
            $table->string('email', 255);
            $table->string('role', 40);
            $table->string('photo', 255)->nullable();
            $table->unsignedTinyInteger('level');

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
        Schema::dropIfExists('employees');
    }
}
