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
        Schema::create('work_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('employee_id'); // Ensure this is unsigned

            // Define foreign key constraint
            $table->foreign('employee_id')
                  ->references('employeeid')
                  ->on('users')
                  ->onDelete('cascade');

            $table->date('date');
            $table->time('check_in');
            $table->time('check_out')->nullable();
            $table->text('work_report');
            $table->text('project_name')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_reports');
    }
};

