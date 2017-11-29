<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string("year");
            $table->string("description");
            $table->string("img");
            $table->string("type");
            $table->integer("total_episodes");
            $table->date("start")->nullable();
            $table->date("stop")->nullable();
            $table->string("akihabara")->nullable();
            $table->integer("status_id")->unsigned()->unique();
            $table->timestamps();

            $table->foreign("status_id")
                ->references("id")
                ->on("statuses")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
