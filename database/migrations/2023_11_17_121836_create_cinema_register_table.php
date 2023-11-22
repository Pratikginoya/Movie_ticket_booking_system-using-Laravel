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
            $table->increments('admin_id');
            $table->string('owner_name');
            $table->string('cinema_name');
            $table->string('location');
            $table->string('license_id');
            $table->string('email');
            $table->string('password');
            $table->string('mobile');
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
