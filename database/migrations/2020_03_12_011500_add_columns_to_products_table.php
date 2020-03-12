<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->enum('type', ['TNAS', 'TDAS'])->default('TNAS');
            $table->enum('size', ['2-BAY', '4-BAY', '5-BAY', '8-BAY', '12-BAY', '16-BAY', '24-BAY'])->default('2-BAY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('size');
        });
    }
}
