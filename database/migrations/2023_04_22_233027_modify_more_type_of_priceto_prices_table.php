<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyMoreTypeOfPricetoPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->boolean('more_type_of_price')->default(0)->after('finished_at');
            $table->boolean('is_paid')->default(0)->after('more_type_of_price');
            $table->dropColumn(['price', 'dinner_price']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['more_type_of_price', 'is_paid']);
            $table->integer('price')
                  ->nullable()
                  ->after('finished_at');
            $table->integer('dinner_price')
                  ->nullable()
                  ->after('price');
        });
    }
}
