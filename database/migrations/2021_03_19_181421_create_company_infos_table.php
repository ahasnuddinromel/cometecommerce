<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id();            
            $table->string('title');
            $table->string('company_name');
            $table->string('company_logo');
            $table->string('email');
            $table->string('phone_number');
            $table->string('slogan');
            $table->longText('company_discription')->nullable();
            $table->string('company_address');
            $table->string('location_url');
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
        Schema::dropIfExists('company_infos');
    }
}
