<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MaNV');
            $table->string('TenNV');
            $table->tinyInteger('GT');
            $table->date('Ngay_sinh');
            $table->integer('Dien_thoai');
            $table->string('email');
            $table->integer('User_id')->unsigned();
            $table->foreign('User_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('PB_id')->unsigned();
            $table->foreign('PB_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('Role_id')->unsigned();
            $table->foreign('Role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('employees');
    }
}
