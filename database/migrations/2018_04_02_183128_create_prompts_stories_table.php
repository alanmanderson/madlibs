<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromptsStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prompts_stories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('story_id');
            $table->unsignedInteger('prompt_id');
            $table->string('text');
            $table->timestamps();
            $table->foreign('story_id')->references('id')->on('stories');
            $table->foreign('prompt_id')->references('id')->on('prompts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prompts_stories');
    }
}
