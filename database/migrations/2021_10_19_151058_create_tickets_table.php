<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->foreignId('event_id')->constrained();
            $table->foreignId('payment_id')->constrained();
            $table->bigInteger('quantity');
            $table->bigInteger('total');
            $table->boolean('is_paid')->default(false);
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->integer('zip');
            $table->string('city');
            $table->string('street');
            $table->string('house_number');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
