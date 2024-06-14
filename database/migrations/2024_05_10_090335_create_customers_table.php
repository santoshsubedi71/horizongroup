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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number')->nullable()->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('first_name_kana');
            $table->string('last_name_kana');
            $table->date('dob');
            $table->tinyInteger('gender'); 
            $table->string('phone', 11); 
            $table->string('email')->nullable()->unique();
            $table->tinyInteger('marital_status');
            $table->string('postal_code', 10);
            $table->string('address');
            $table->date('visa_expiry'); 
            $table->tinyInteger('visa_status'); 
            $table->tinyInteger('education_level'); 
            $table->string('faculty');
            $table->tinyInteger('process')->defailt(0); 
            $table->tinyInteger('jlpt_level'); 
            $table->boolean('driving_license')->default(false);
            $table->integer('status')->default(0);
            $table->text('memo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
