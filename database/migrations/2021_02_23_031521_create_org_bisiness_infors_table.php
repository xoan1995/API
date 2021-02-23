<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgBisinessInforsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_bisiness_infors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ocop_id');
            $table->foreign('ocop_id')->references('id')->on('ocops')->onDelete('cascade');
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
        Schema::dropIfExists('org_bisiness_infors');
    }
}
