<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('employee', function (Blueprint $table) {

            $table->id(); 
            $table->string('name')->nullable();       
            $table->string('employee_address')->nullable();         
            $table->string('aadhar_no')->nullable(); 
            $table->string('dob')->nullable(); 
            $table->string('qualification')->nullable(); 
            $table->string('phone_no')->nullable();    
            $table->string('designation')->nullable();
            $table->string('emptype')->nullable();
            $table->string('join_date')->nullable();     
            $table->string('salary')->nullable();     
            $table->string('salary_date')->nullable();
            $table->string('image')->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
