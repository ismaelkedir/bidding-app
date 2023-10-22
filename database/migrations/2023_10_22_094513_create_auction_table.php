<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('auction', function (Blueprint $table) {
            $table->id();
            $table->string('title', 225);
            $table->string('image', 225);
            $table->text('description');
            $table->integer('starting_price');
            $table->date('start_date');
            $table->date('end_date');
            $table->tinyInteger('status');
            $table->string('category', 225)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auction');
    }
};
