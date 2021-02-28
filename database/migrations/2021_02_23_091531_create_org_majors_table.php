<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_majors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('list_majors');
            $table->string('relation_org_majors');
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
        Schema::dropIfExists('org_majors');
    }
}
