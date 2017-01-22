<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type_course');
            $table->string('title_course');
            $table->text('detail_course');
            $table->integer('price_course');
            $table->date('start_course');
            $table->date('end_course');
            $table->string('time_course');
            $table->string('day_course');
            $table->string('image_course');
            $table->string('url_course');
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
        Schema::drop('courses');
    }
}
