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
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('weight')->nullable()->after('slug');
            $table->bigInteger('size_x')->nullable()->after('weight');
            $table->bigInteger('size_y')->nullable()->after('size_x');
            $table->bigInteger('size_z')->nullable()->after('size_y');
            $table->boolean('is_virtual')->default(0)->after('content');
            $table->boolean('is_shippable')->default(0)->after('is_stackable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function($table) {
            $table->dropColumn('weight');
            $table->dropColumn('size_x');
            $table->dropColumn('size_y');
        });
    }
};
