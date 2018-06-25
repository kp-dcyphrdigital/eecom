<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->string('sku');
            $table->unsignedMediumInteger('price');
            $table->unsignedMediumInteger('rrp');
            $table->unsignedSmallInteger('stock');
            $table->string('attribute1')->default('0');
            $table->string('attribute2')->default('0');
            $table->string('attribute3')->default('0');
            $table->string('attribute4')->default('0');
            $table->string('attribute5')->default('0');
            $table->string('attribute6')->default('0');
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
        Schema::dropIfExists('variants');
    }
}
