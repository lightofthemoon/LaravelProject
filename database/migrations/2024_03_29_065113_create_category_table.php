<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('CategoryName');
            $table->boolean('isDeleted')->default(1);
        });
    }

    public function down()
    {
        Schema::dropIfExists('category');
    }
};
