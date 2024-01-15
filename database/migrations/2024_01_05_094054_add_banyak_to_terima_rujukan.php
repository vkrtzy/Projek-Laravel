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
        Schema::table('terima_rujukan', function (Blueprint $table) {
            $table->bigInteger('noktp');
            $table->string('alamat');
            $table->string('kecamatan');
            $table->string('desa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('terima_rujukan', function (Blueprint $table) {
            $table->dropColumn('noktp');
            $table->dropColumn('alamat');
            $table->dropColumn('kecamatan');
            $table->dropColumn('desa');
        });
    }
};
