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
            $table->foreignId('org_basic_infor_id')->constrained();
            $table->foreignId('org_majors_id')->constrained();
            $table->foreignId('org_news_id')->constrained();
            $table->foreignId('org_media_id')->constrained();
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
