<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('tests_assigned', function (Blueprint $table) {
          $table->foreign('id_user')->references('id')->on('users');
          $table->foreign('id_test')->references('id_test')->on('tests');
      });
      Schema::table('questions', function (Blueprint $table) {
          $table->foreign('id_test')->references('id_test')->on('tests');
      });
      Schema::table('options', function (Blueprint $table) {
          $table->foreign('id_question')->references('id_question')->on('questions');
      });
      Schema::table('results', function (Blueprint $table) {
          $table->foreign('id_question')->references('id_question')->on('questions');
          $table->foreign('id_user')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign');
    }
}
