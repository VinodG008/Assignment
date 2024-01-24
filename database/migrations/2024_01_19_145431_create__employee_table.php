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
        Schema::create('Employee_data', function (Blueprint $table) {
            $table->id('emp_id');
            $table->string('name');
            $table->integer('mob_num');
            $table->string('department');
            $table->string('addressline1');
            $table->string('addressline2');
            $table->string('district');
            $table->string('tahsil');
            $table->string('city');
            $table->integer('pincode');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('salary');
             
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Employee_data');
    }
};
