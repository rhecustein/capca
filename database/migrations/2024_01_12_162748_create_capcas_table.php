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
        Schema::create('capcas', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('img')->nullable();
            $table->integer('status')->default('0');
            $table->integer('A')->default('0');
            $table->integer('B')->default('0');
            $table->integer('C')->default('0');
            $table->integer('D')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capcas');
    }
};
