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
        Schema::table('products', function (Blueprint $table) {
            $table->string('lead_time')->nullable();
            $table->string('tax')->nullable();
            $table->string('tax_type')->nullable();
            $table->integer('is_promo')->default(1)->comment('1=>active,0=>Inactive');
            $table->integer('is_featured')->default(1)->comment('1=>active,0=>Inactive');
            $table->integer('is_discounted')->default(1)->comment('1=>active,0=>Inactive');
            $table->integer('is_trending')->default(1)->comment('1=>active,0=>Inactive');
         
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('lead_time');
            $table->dropColumn('tax');
            $table->dropColumn('tax_type');
            $table->dropColumn('is_promo');
            $table->dropColumn('is_featured');
            $table->dropColumn('is_discounted');
            $table->dropColumn('is_trending');
        
        });
    }
};