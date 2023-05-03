<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tes_table', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("NIM");
            $table->string("dosen_1");
            $table->string("dosen_2");
            $table->string("dosen_penguji");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tes_table');
    }
};
