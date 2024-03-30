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
        $table->foreignId('CategoryId')->constrained('category');
        $table->string('Title');
        $table->string('Description');
        $table->date('StartDate');
        $table->decimal('Price', 10, 2);
        $table->string('ImageURL')->nullable();
        $table->string('DemoVideo')->nullable();
        $table->string('Note')->nullable();
        $table->boolean('isDeleted')->default(1);
    });
}

public function down()
{
    Schema::dropIfExists('course');
}
};
