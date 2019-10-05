<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEducationToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('school');
            $table->string('degree');
            $table->string('Fieldofstudy');
            $table->string('grade');
            $table->text('Activitiesandsocieties')->nullable();
            $table->date('FromYear')->format('m-Y');
            $table->date('ToYear')->format('m-Y');
            $table->text('Description')->nullable();
            $table->string('Media');
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
        Schema::dropIfExists('educations');
    }
}
