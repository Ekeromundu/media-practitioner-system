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
        Schema::create('public_relation_officers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('organization');
            $table->string('description');
            $table->foreignId('location_id');
            $table->string('award/recognitions');
            $table->string('specialization');
            $table->string('experience_level');
            $table->string('profile_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public_relation_officers');
    }
};
