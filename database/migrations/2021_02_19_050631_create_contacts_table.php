<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('người liên hệ');
            $table->integer('sđt 1');
            $table->integer('sđt 2');
            $table->string('email');
            $table->string('địa chỉ');
            $table->string('trạng thái');
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
        Schema::dropIfExists('contacts');
    }
}
