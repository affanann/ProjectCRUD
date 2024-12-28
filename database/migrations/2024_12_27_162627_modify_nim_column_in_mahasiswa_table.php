<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->string('nim', 20)->change(); // Ubah tipe data ke VARCHAR dengan panjang maksimum 20 karakter
        });
    }

    public function down()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->integer('nim')->change(); // Kembalikan ke INT jika rollback
        });
    }
};
