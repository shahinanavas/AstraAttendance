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
        Schema::create('task_shedule', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('assign_to')->nullable();
            $table->string('taskname')->nullable();
            $table->string('taskdescription')->nullable();
            $table->string('allocationdate')->nullable();
            $table->string('deadlinedate')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_shedule');
    }
};
