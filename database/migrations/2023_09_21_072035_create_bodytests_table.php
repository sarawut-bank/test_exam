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
        Schema::create('bodytests', function (Blueprint $table) {
            $table->id();
            $table->string('eye_color');
            $table->string('eye_lenght');
            $table->string('eye_astig');
            $table->string('body_response');
            $table->string('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodytests');
    }

    
};


