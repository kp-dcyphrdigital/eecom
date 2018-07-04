<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdjustCartsTableAddSkuQtyRmProductsFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->unsignedInteger('cart_id')->nullable()->after('id');
            $table->string('sku')->default('')->after('user_id');
            $table->unsignedMediumInteger('quantity')->default(0)->after('sku');
            $table->dropColumn('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('cart_id');
            $table->dropColumn('sku');
            $table->dropColumn('quantity');
            $table->text('products')->nullable()->after('user_id');

        });
    }
}
