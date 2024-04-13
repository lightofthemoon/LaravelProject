<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoryId')->constrained('category');
            $table->foreignId('teacherId')->constrained('teacher');
            $table->string('title');
            $table->string('description');
            $table->date('startDate');
            $table->decimal('price', 10, 2);
            $table->string('imageURL')->nullable();
            $table->string('demoVideo')->nullable();
            $table->string('note')->nullable();
            $table->boolean('isDeleted')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course');
    }
};
