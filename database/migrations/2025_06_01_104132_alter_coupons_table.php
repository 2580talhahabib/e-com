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
        Schema::table('coupons', function (Blueprint $table) {
           $table->string('type')->default(1)->comment('1=>value,0=>percentage');
           $table->integer('min_order_amt');
           $table->integer('is_onetime');
            $table->integer('status')->default(1)->comment('1=>active,0=>Inactive');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coupons', function (Blueprint $table) {
         $table->dropColumn('type');
           $table->dropColumn('min_order_amt');
           $table->dropColumn('is_onetime');
            $table->dropColumn('status');
        });
    }
};