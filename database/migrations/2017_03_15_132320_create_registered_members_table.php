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
            // $table->integer('country_id')->unsigned();
            // $table->integer('category_id')->unsigned();
            // $table->integer('businesstype_id')->unsigned();
            $table->increments('id');
            $table->string('job_title');
            $table->string('name_of_director');
            $table->string('company_name');
            $table->string('postal_address');
            $table->string('business_address_or_location');
            $table->string('region');
            $table->string('company_email');
            $table->string('company_active_phone');
            $table->string('company_phone_two');
            $table->string('company_phone_three');
            $table->string('company_website');
            $table->string('company_description');
            $table->timestamps();


            // $table->foreign('country_id')
            // ->references('id')
            // ->on('country')
            // ->onDelete('cascade');

            //   $table->foreign('category_id')
            // ->references('id')
            // ->on('categories')
            // ->onDelete('cascade');

            //   $table->foreign('businesstype_id')
            // ->references('id')
            // ->on('business_type')
            // ->onDelete('cascade');

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
