<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('ingredienti', 200);
            $table->string('base_alcolica', 150);
            $table->string('paese_di_origine', 50);
            $table->boolean('is_alcoholic')->default(true);
            $table->string('flavor', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktails');
    }
};
