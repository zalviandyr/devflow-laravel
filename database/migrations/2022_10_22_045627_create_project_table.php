<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->unsignedBigInteger('team_id');
            $table->timestamp('deadline_at');
            $table->unsignedBigInteger('topic_id');
            $table->timestamps();

            $table->foreign('team_id')->on('team')->references('id');
            $table->foreign('topic_id')->on('topic')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
};
