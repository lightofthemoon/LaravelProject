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
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->foreignId('RoleId')->constrained('role');
            $table->string("Name");
            $table->date('Birthday');
            $table->string("Email");
            $table->string("PhoneNumber");
            $table->string("Avatar");
            $table->boolean("Gender")->default(0);
            $table->string("Password");
            $table->boolean('isDeleted')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
