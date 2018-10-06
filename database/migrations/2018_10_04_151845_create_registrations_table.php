<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('ic_number');
            $table->string('phone');
            $table->string('location');
            $table->string('answer1')->nullable();
            $table->string('answer2')->nullable();
            $table->string('answer3')->nullable();
            $table->string('answer4')->nullable();
            $table->string('answer5')->nullable();
            $table->timestamp('q1_created_at')->nullable();
            $table->timestamp('q2_created_at')->nullable();
            $table->timestamp('q3_created_at')->nullable();
            $table->timestamp('q4_created_at')->nullable();
            $table->timestamp('q5_created_at')->nullable();
            $table->string('created_ip')->nullable();
            $table->string('updated_ip')->nullable();
            $table->string('share_on_fb')->nullable()->default('No');
            $table->string('share_on_tw')->nullable()->default('No');
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
        Schema::dropIfExists('registrations');
    }
}
