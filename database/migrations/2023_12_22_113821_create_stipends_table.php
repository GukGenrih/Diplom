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
        Schema::create('stipends', function (Blueprint $table) {
            $table->id();
            $table->boolean('stipend')->default('0');
            $table->date('stipend_maked')->nullable();
            $table->date('stipend_arrived')->nullable();
            $table->unsignedBigInteger('student_id');
            $table->index('student_id', 'student_id_idx');
            $table->foreign('student_id', 'student_id_fk2')->on('students')->references('id')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stipends');
    }
};
