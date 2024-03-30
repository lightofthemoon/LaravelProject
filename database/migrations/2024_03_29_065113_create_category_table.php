<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('CategoryID');
            $table->string('CategoryName');
            $table->boolval('isDeleted', default: $false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('category');
    }
};
