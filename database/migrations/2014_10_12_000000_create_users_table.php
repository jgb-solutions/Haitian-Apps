<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email', 60)->unique()->nullable();
            $table->string('password', 60)->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('admin')->default(false);
            $table->string('facebook_id', 16)->unique()->nullable();
            $table->string('google_id', 16)->unique()->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('google_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('telephone', 20)->nullable();
            // $table->boolean('active')->default(false);
            $table->string('password_reset_code')->nullable();
            // $table->boolean('first_login')->default(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
