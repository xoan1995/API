<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact');
            $table->integer('phone_1');
            $table->integer('phone_2');
            $table->string('email');
            $table->string('address');
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
        Schema::dropIfExists('org_contacts');
    }
}
