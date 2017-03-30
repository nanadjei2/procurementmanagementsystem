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
            $table->enum('major_activity_category',['Goods','Services','Works']);
            $table->string('company_major_activitygoods');
            $table->string('company_major_activityservices');
            $table->string('company_major_activityworks');

            $table->enum('minor_activity1_category',['None','Goods','Services','Works']);
            $table->string('company_minor_activity1goods')->nullable();
            $table->string('company_minor_activity1services')->nullable();
            $table->string('company_minor_activity1works')->nullable();

            $table->enum('minor_activity2_category',['None','Goods','Services','Works']);
            $table->string('company_minor_activity2goods')->nullable();
            $table->string('company_minor_activity2services')->nullable();
            $table->string('company_minor_activity2works')->nullable();

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
