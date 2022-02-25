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
        Schema::table('hotelska_sobas', function (Blueprint $table) {

            $table->boolean('terasa');
            $table->boolean('kuhinja');
            $table->boolean('minibar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotelska_sobas', function (Blueprint $table) {
            //
        });
    }
};
