<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjectOffice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikomek-project-office-category', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('stage')->nullable();
            $table->string('title')->nullable();
            $table->string('kurator')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('contractor')->nullable();
            $table->dateTime('started_at')->nullable();
            $table->dateTime('finished_at')->nullable();
            $table->text('result')->nullable();

            $table->unsignedInteger('category_id')->nullable();

            $table->text('images')->nullable();
            $table->integer('identifier')->nullable();
            $table->bigInteger('budget')->nullable();

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
        Schema::table('ikomek-project-office-category', function (Blueprint $table) {
            //
        });
    }
}
