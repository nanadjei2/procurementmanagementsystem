<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberMajoractivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_majoractivity', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('memberid')->unsigned();
            $table->integer('majoractivitycategory')->unsigned();
            $table->string('majoractivityname');
          
          
            $table->foreign('memberid')
            ->references('id')
            ->on('registered_members')
            ->onDelete('cascade');


       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('member_majoractivity');
    }
}
