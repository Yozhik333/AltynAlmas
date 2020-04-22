<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDigitalMineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digital_mine', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_url_1');
            $table->string('video_url_1');
            $table->string('img_url_2');
            $table->string('video_url_2');
            $table->text('text_kz');
            $table->text('text_ru');
            $table->text('text_en');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('digital_mine');
    }
}
