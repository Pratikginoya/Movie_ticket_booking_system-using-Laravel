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
        Schema::create('seat_book', function (Blueprint $table) {
            $table->increments('sb_id');
            $table->integer('user_id');
            $table->integer('show_id');
            $table->integer('screen_no');
            $table->integer('seat_id');
            $table->string('seat_no');
            $table->integer('price');
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
        Schema::dropIfExists('seat_book');
    }
};
