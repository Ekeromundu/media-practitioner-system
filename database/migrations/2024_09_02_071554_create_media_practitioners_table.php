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
        Schema::create('media_practitioners', function (Blueprint $table) {
            $table->id();
            $table->string('Surname');
            $table->string('maiden_name');
            $table->string('firstname');
            $table->date('DOB');
            $table->string('POB');
            $table->string('nationality');
            $table->string('IDNO');
            $table->string('sex');
            $table->string('employer');
            $table->string('baddress');
            $table->string('email');
            $table->string('fax');
            $table->string('tel');
            $table->string('raddress');
            $table->string('remail');
            $table->string('rfax');
            $table->string('rtel');

            $table->string('capacity');
            $table->string('institutionaddress');
            $table->string('postadd');
            $table->string('city');
            $table->string('country');
            $table->string('contact');
            $table->string('instutitionTel');
            $table->string('instutitionEmail');
            $table->string('visa');
            $table->string('issuedat');
            $table->string('dateissued');
            $table->string('expiry_date');
            $table->string('status');
                    $table->string('profile_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_practitioners');
    }
};
