<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('Occupation')->nullable();
            $table->string('Hobbies')->nullable();
            $table->string('DOB')->nullable();
            $table->string('Nationality')->nullable();
            $table->string('votes')->nullable();
            $table->string('location')->nullable();
            $table->string('gender');
            $table->string('About');
            $table->string('image');

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
        Schema::dropIfExists('contestants');
    }
}
