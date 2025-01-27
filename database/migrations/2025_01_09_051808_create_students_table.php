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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status')->default(true);
            $table->string('course');
            $table->boolean('is_registered')->default(0);
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable(); 
            $table->string('password')->nullable(); 
            $table->rememberToken(); 
            $table->string('slug')->nullable();
            $table->string('position');
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('registration_no')->nullable();
            $table->string('guardian_name')->nullable();            
            $table->string('image')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
