<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_show', function (Blueprint $table) {
            $table->increments('show_id');
            $table->integer('user_id');
            $table->integer('m_id');
            $table->string('show_time');
            $table->string('screen');
            $table->string('date');
            $table->integer('gold');
            $table->integer('silver');
            $table->integer('platinum');
            $table->dateTimeTz('created_at',$precision=0)->useCurrent();
            $table->dateTimeTz('updated_at',$precision=0)->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_show');
    }
};
