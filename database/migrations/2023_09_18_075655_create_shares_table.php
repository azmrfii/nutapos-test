<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shares', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('harga_sebelum_markup');
            $table->bigInteger('markup_persen');
            $table->bigInteger('share_persen');
            $table->bigInteger('net_untuk_resto')->nullable();
            $table->bigInteger('share_untuk_ojol')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shares');
    }
};
