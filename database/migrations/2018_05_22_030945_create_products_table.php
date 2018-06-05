<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->char('slug', 100);
            $table->string('name', 100);
            $table->text('description');
            $table->string('image');
            $table->unsignedMediumInteger('price');
            $table->unsignedMediumInteger('rrp');
            $table->unsignedSmallInteger('stock');
            $table->char('badge', 10)->nullable();
            $table->unsignedTinyInteger('rating')->default(0);
            $table->boolean('featured')->default(0);
            $table->timestamps();
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
