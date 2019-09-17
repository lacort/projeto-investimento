<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        Schema::create('user_socials', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->string('sosial_network');
            $table->string('social_id');
            $table->string('social_email');
            $table->string('socia_avatar');

            $table->timestamps();

            $table->foreign('use_id')->references('id')->on('users');
            $table->foreign('social_email')->references('email')->on('users');

        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {/*
        Schema::table('user_socials', function (Blueprint $table)
        {
            $table->dropForeign('user_socials_user_id_foreign');
            $table->dropForeign('user_socials_socials_email_foreign');

        });

        Schema::dropIfExists('user_socials');*/
    }
}
