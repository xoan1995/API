<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('description');
            $table->longText('about');
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
        Schema::dropIfExists('org_details');
    }
}
