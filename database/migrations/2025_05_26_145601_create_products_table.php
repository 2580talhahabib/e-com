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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->longText('short_desc')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('keywords')->nullable();
            $table->longText('technical_specification')->nullable();
            $table->longText('uses')->nullable();
            $table->longText('waranty')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};