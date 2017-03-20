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
            $table->integer('user_id')->unsigned();
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
            $table->string('bank_draft_number');
            $table->string('company_website');
            $table->string('company_major_activity');
            $table->string('company_other_activity');
            $table->timestamps();


           
              $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
