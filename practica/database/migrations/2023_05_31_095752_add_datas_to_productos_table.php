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
        Schema::table('productos', function (Blueprint $table) {
            $table->string('name');
            $table->string('short_description');
            $table->text('long_description');
            $table->decimal('sale_price', 8, 2);
            $table->decimal('purchase_price', 8, 2);
            $table->integer('stock');
            $table->string('product_id');
            $table->date('fecha');
            $table->string('peso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('short_description');
            $table->dropColumn('long_description');
            $table->dropColumn('sale_price');
            $table->dropColumn('purchase_price');
            $table->dropColumn('stock');
            $table->dropColumn('product_id');
            $table->dropColumn('fecha');
            $table->dropColumn('peso');
        });
    }
};
