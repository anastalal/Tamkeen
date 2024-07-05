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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // عنوان الوظيفة
            $table->text('description')->nullable(); // وصف الوظيفة (اختياري)
            $table->foreignId('pattern_id')->constrained('patterns'); // الربط بالنمط
            $table->foreignId('functional_area_id')->constrained('functional_areas'); // الربط بالمساحة الوظيفية
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
