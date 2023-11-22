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
        Schema::create('cinema_register', function (Blueprint $table) {
            $table->increments('cinema_id');
            $table->string('owner');
            $table->string('th_name');
            $table->string('shopping');
            $table->string('location');
            $table->string('license');
            $table->string('total_screen');
            $table->string('email');
            $table->string('mobile');
            $table->string('password');
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
        Schema::dropIfExists('cinema_register');
    }
};
