<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisteredMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('registered_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('businesstype_id')->unsigned();
            $table->string('job_title');
            $table->string('company_name');
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_website');
            $table->string('physical_address');
            $table->string('postal_address');
            $table->string('tin_number');
            $table->string('company_description');
            $table->string('alt_email');
            $table->string('alt_company_phone');
            $table->timestamps();


            $table->foreign('country_id')
            ->references('id')
            ->on('country')
            ->onDelete('cascade');

              $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');

              $table->foreign('businesstype_id')
            ->references('id')
            ->on('businesstype')
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
        //
        Schema::drop('registered_members');
    }
}
