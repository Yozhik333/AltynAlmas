<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlossaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glossary', function (Blueprint $table) {
            $table->increments('id');
            $table->string('letter_kz');
            $table->string('letter_ru');
            $table->string('letter_en');
            $table->string('word_kz');
            $table->string('word_ru');
            $table->string('word_en');
            $table->text('text_kz');
            $table->text('text_ru');
            $table->text('text_en');
            $table->boolean('is_active');
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
        Schema::dropIfExists('glossary');
    }
}
