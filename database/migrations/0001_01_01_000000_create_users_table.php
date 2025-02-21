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
        Schema::create('stutus', function (Blueprint $table) {
            $table->id();
            $table->string('status_name')->uniqid();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('profile');
            $table->foreignId('status_id')->constrained('status');
            $table->timestamps();
        });

        Schema::create('currency', function (Blueprint $table) {
            $table->id();
            $table->decimal('usd', 15, 2);
            $table->decimal('khr', 15, 2);
            $table->timestamps();
        });

        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string('role_name');
            $table->text('description')->nullable();
            $table->foreignId('status_id')->constrained('status');
            $table->timestamps();
        });

        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->string('category_image')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('category');
            $table->text('description')->nullable();
            $table->foreignId('status_id')->constrained('status');
            $table->timestamps();
        });

        Schema::create('unit', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name');
            $table->text('description')->nullable();
            $table->foreignId('status_id')->constrained('status');
            $table->timestamps();
        });

        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('category');
            $table->foreignId('sale_unit_id')->constrained('unit');
            $table->foreignId('bulk_unit_id')->nullable()->constrained('unit');
            $table->integer('conversion_rate')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->string('product_name', 255);
            $table->string('barcode');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('status_id')->constrained('status');
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
