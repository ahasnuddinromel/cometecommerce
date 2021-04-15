<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('pid');
            $table->string('pname');
            $table->unsignedInteger('product_catagorie_id');
            $table->unsignedInteger('sub_catagorie_id');
            $table->unsignedInteger('brand_id');
            $table->integer('quantity')-> nullable();
            $table->string('product_size')-> nullable();
            $table->string('product_color')-> nullable();
            $table->longText('product_discription')-> nullable();
            $table->integer('tp')-> nullable();
            $table->integer('sp')-> nullable();
            $table->string('photo')-> nullable();
            $table->longText('multi_photo')-> nullable();
            $table->string('status')->default('published');
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
        Schema::dropIfExists('product_infos');
    }
}
