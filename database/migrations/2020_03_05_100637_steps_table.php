<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id')->default(0);
            $table->text('en');
            $table->text('de');
            $table->text('fr');
            $table->text('it');
            $table->text('es');
            $table->text('hu');
            $table->text('ko');
            $table->text('ja');
            $table->text('cn');
            $table->text('tw');
            $table->text('ru');
            $table->unsignedTinyInteger('sort')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('steps');
    }
}
