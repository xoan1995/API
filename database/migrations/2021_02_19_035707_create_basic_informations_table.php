<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('viName');
            $table->string('enName');
            $table->integer('taxCode');
            $table->string('address');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->unsignedBigInteger('subDistrict_id');
            $table->foreign('subDistrict_id')->references('id')->on('sub_districts')->onDelete('cascade');
            $table->string('representative');
            $table->integer('phone');
            $table->string('email');
            $table->integer('civilScale');
            $table->string('founding');
            $table->date('dateOfChangeofBusinessLicense')->NULL();
            $table->string('status');
            $table->unsignedBigInteger('bisinessInformation_id');
            $table->foreign('bisinessInformation_id')->references('id')->on('bisiness_informations')->onDelete('cascade');
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
        Schema::dropIfExists('basic_informations');
    }
}
