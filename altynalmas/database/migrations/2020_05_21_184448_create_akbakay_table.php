<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAkbakayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akbakay', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_url');
            $table->string('img_url_kz');
            $table->string('img_url_en');
            $table->string('title_kz');
            $table->string('title_ru');
            $table->string('title_en');
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
        Schema::dropIfExists('akbakay');
    }
}