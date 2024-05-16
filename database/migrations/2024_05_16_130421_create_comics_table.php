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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug', 120)->unique();
            $table->text('description')->nullable();
            $table->text('thumb');
            $table->string('price', 10);
            $table->string('series', 50);
            $table->date('sale_date');
            $table->string('type', 50);
            $table->string('artists');  //relazione con altra tabella (?)
            $table->string('writers');  //relazione con altra tabella (?)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
