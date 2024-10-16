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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
           
            $table->string('google_id')->unique()->nullable()->default(null);
            $table->string('github_id')->unique()->nullable()->default(null);
            $table->string('email')->unique()->default(null);
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', ["admin", "users", "superadmin", "penjual"])->nullable()->default('users');
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->string('images')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
