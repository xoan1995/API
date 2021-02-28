<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInforMajorsNewsMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infor_majors_news_media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('org_basic_infor_id');
            $table->foreign('org_basic_infor_id')->references('id')->on('org_basic_infors')->onDelete('cascade');
           
            $table->unsignedBigInteger('org_majors_id');
            $table->foreign('org_majors_id')->references('id')->on('org_majors')->onDelete('cascade');
            
            $table->unsignedBigInteger('org_news_id');
            $table->foreign('org_news_id')->references('id')->on('org_news')->onDelete('cascade');
            
            $table->unsignedBigInteger('org_media_id');
            $table->foreign('org_media_id')->references('id')->on('org_media')->onDelete('cascade');
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
        Schema::dropIfExists('infor_majors_news_media');
    }
}
