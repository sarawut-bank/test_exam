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
        Schema::create('alldatas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surename');
            $table->string('eye_color');
            $table->string('eye_lenght');
            $table->string('eye_astig');
            $table->string('body_response');
            $table->string('signs-traff');
            $table->string('lines-traff');
            $table->string('give-way');
            $table->string('statuswork');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alldatas');
    }
};
