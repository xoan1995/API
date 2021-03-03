<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('code');           
            $table->string('name',50);
            $table->string('name_short',50);
            $table->string('name_slug',50);
            $table->integer('district_code');
            $table->integer('province_code');
            $table->tinyInteger('is_active')->length(1);
            $table->timestamps();
            $table->softDeletes('delete_at',$precision=0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wards');
    }
}
