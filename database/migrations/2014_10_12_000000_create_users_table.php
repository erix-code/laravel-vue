<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->date('birthdate')->nullable();
            $table->string('phone')->nullable();
            $table->string('ci')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('zone')->nullable();
            $table->string('gender')->nullable();
            $table->char('other_secure')->nullable();
            $table->string('ci_image', 500)->nullable();
            $table->string('image_url',1000)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
