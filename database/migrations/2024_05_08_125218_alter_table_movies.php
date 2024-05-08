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
        Schema::table('movies', function (Blueprint $table) {
            $table->decimal('production_cost', 10,2);
            $table->decimal('sale_amount', 10,2);
            $table->double('profit_double', 15, 8);
            $table->float('profit_float', 8, 2); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('production_cost');
            $table->dropColumn('sale_amount');
            $table->dropColumn('profit_double');
            $table->dropColumn('profit_float');

        });
    }
};
