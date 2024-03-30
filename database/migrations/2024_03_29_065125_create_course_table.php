<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('course', function (Blueprint $table) {
        $table->increments('CourseID');
        $table->unsignedInteger('CategoryID');
        $table->foreign('CategoryID')->references('CategoryID')->on('category');
        $table->string('Title');
        $table->text('Description');
        $table->date('StartDate');
        $table->decimal('Price', 10, 2);
        $table->string('ImageURL')->nullable();
        $table->string('DemoVideo')->nullable();
        $table->text('Note')->nullable();
        $table->boolval('isDeleted', default: $false);
    });
}

public function down()
{
    Schema::dropIfExists('course');
}
};
