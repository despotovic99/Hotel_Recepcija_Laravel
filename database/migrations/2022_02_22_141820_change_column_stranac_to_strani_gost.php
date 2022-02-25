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
        Schema::table('gosts', function (Blueprint $table) {
            $table->renameColumn('stranac','strani_gost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gosts', function (Blueprint $table) {
            $table->renameColumn('strani_gost','stranac');
        });
    }
};
