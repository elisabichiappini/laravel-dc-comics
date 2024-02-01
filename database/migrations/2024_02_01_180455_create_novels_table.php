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
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->string('title', 300);
            $table->text('description')->nullable();
            $table->string('thumb', 400);
            $table->char('price', 7);
            $table->string('series', 200);
            $table->date('sale_date');
            $table->string('type', 100);
            $table->string('artists', 800);
            $table->string('writers', 800);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novels');
    }
};