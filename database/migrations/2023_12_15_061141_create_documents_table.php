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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->boolean('doc')->default('0');
            $table->date('doc_maked')->nullable();
            $table->date('doc_arrived')->nullable();
            $table->unsignedBigInteger('student_id');
            $table->index('student_id', 'student_id_idx');
            $table->foreign('student_id', 'student_id_fk')->on('students')->references('id')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document');
    }
};
