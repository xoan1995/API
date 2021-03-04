<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgBasicInforsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_basic_infors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('name_en');
            $table->integer('code_tax');
            $table->string('address');

            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            
            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            
            $table->unsignedBigInteger('ward_id');
            $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade');
            
            $table->string('representative');
            $table->integer('phone');
            $table->string('email');
            $table->integer('civil_scale');
            $table->string('founding');
            $table->date('org_created')->NULL();
            $table->string('status');

            $table->unsignedBigInteger('org_bisiness_infor_id');
            $table->foreign('org_bisiness_infor_id')->references('id')->on('org_bisiness_infors')->onDelete('cascade');
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
        Schema::dropIfExists('org_basic_infors');
    }
}
