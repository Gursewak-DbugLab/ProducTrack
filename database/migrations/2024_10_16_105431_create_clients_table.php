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
            $table->bigIncrements('id');
            $table->jsonb('metadata')->nullable();
            $table->string('product_name')->nullable();
            $table->string('client_name')->nullable();
            $table->string('team_leader_name')->nullable();
            $table->string('employee_name')->nullable();
            $table->bigInteger('estimated_time')->nullable();
            $table->bigInteger('spent_time')->nullable();
            $table->string('status')->nullable();
            $table->date('contract_start_date')->nullable();
            $table->date('contract_end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
