<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->longText('link');
 	        $table->longText('logo');
            $table->longText('avatar');
            $table->longText('img_supple');
            $table->longText('img_certificate');
            $table->string('size');
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
        Schema::dropIfExists('org_media');
    }
}
