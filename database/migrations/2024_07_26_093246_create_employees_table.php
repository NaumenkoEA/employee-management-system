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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name')->nullable();
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('department_id');
            $table->date('hire_date');
            $table->decimal('salary');
            $table->string('phone');
            $table->string('email');
            $table->date('birth_date');
            $table->enum('gender', ['male', 'female']);
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
