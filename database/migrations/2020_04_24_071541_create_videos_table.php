<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('thumbnail')->nullable();
            $table->string('video_url');
            $table->integer('duration');
            $table->dateTime('published_at');
            $table->text('code_summary')->nullable();
            $table->decimal('order');
            $table->boolean('pro')->nullable();
            $table->string('lesson_type')->nullable();
            $table->text('code')->nullable();
            $table->string('code_summary_state')->default('not_ready');
            $table->unsignedBigInteger('course_id');
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
        Schema::dropIfExists('videos');
    }
}
