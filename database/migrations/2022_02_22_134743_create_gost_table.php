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
        Schema::create('gosts', function (Blueprint $table) {
            $table->id();
            $table->string('broj_dokumenta')->unique();
            $table->string('ime');
            $table->string('prezime');
            $table->date('datum_rodjenja');
            $table->string('email')->unique();
            $table->string('br_telefona');
            $table->string('pol');
            $table->boolean('stranac');
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
        Schema::dropIfExists('gosts');
    }
};
