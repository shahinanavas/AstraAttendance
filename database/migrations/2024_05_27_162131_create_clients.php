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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_name')->nullable();
            $table->text('client_address')->nullable();
            $table->string('client_phone_no')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_type')->nullable();
            $table->string('project_type_detail')->nullable();
            $table->string('client_project_status')->nullable();
            $table->string('quotation_sent')->nullable();
            $table->string('quotation_file')->nullable();
            $table->string('quotation_status')->nullable();
            $table->double('total_amount')->nullable();
            $table->double('amount_paid')->nullable();
            $table->double('balance')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('cheque_no')->nullable();
            $table->string('transaction_id')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
