<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            //$table->binary('img');
            $table->string('Ingredients_Memo',200)->nullable();
            $table->string('way',500)->nullable();
            $table->integer('cost')->nullable();
            //$table->integer('categoly_id')->unsigned();
            $table->string('difficulty')->nullable();
            $table->string('satiety')->nullable();
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
        Schema::dropIfExists('meals');
    }
}
