<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignKeysOnBusinessTrips extends Migration
{
    public function up(): void
    {
        Schema::table('business_trips', function (Blueprint $table) {

            $table->dropForeign(['employee_id']);

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('business_trips', function (Blueprint $table) {

            $table->dropForeign(['employee_id']);
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }
}
