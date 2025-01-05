<?php


/**
 * Author: Amir Hossein Jahani | iAmir.net
 * Last modified: 4/3/20, 7:49 PM
 * Copyright (c) 2020. Powered by iamir.net
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {

            $table->bigInteger('warehouse_id')->nullable()->unsigned()->after('creator_id');
            $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('cascade');

            $table->bigInteger('shipping_id')->nullable()->unsigned()->after('billing_id');
            $table->foreign('shipping_id')->references('id')->on('locations')->onDelete('cascade');

            $table->bigInteger('shipping_method_id')->nullable()->unsigned()->after('discount_id');
            $table->foreign('shipping_method_id')->references('id')->on('shipping_methods')->onDelete('cascade');

            $table->bigInteger('weight_first')->nullable()->after('number');
            $table->bigInteger('weight_box')->nullable()->after('weight_first');
            $table->bigInteger('weight_total')->nullable()->after('weight_box');
            $table->bigInteger('size_x')->nullable()->after('weight_total');
            $table->bigInteger('size_y')->nullable()->after('size_x');
            $table->bigInteger('size_z')->nullable()->after('size_y');
            $table->bigInteger('shipping_total')->default(0)->after('products_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function($table) {
            $table->dropColumn('warehouse_id');
            $table->dropColumn('shipping_id');
            $table->dropColumn('shipping_method_id');
            $table->dropColumn('weight_first');
            $table->dropColumn('weight_box');
            $table->dropColumn('weight_total');
            $table->dropColumn('size_x');
            $table->dropColumn('size_y');
            $table->dropColumn('size_z');
            $table->dropColumn('shipping_total');
            $table->dropColumn('shipping_status');
            $table->dropColumn('shipped_at');
        });
    }
};
