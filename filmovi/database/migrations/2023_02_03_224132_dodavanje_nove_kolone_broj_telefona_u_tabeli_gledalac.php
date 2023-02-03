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
        Schema::table('gledaoci', function (Blueprint $table) {
            $table->after('imePrezime', function ($table) {
                $table->string('brojTelefona');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gledaoci', function (Blueprint $table) {
            $table->dropColumn('brojTelefona');
        });
    }
};
