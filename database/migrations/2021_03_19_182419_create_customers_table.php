<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('customer_name');
            $table->string('email')->nullable();
            $table->string('phone_number');
            $table->integer('sp');
            $table->string('product_name');
            $table->integer('product_quantity');
            $table->string('product_size');           
            $table->string('product_color');           
            $table->longText('address');
            $table->string('photo');
            $table->string('status')->default('active');
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
        Schema::dropIfExists('customers');
    }
}
