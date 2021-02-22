<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->longText('link');
 	        $table->longText('logo');
            $table->longText('avatar');
            $table->longText('supplementImage');
            $table->longText('certificateImage');
            $table->string('size');
            $table->boolean('status');
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
        Schema::dropIfExists('medias');
    }
}
