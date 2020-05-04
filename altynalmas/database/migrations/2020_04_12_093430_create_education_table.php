<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->string('compulsory_ed_img');
            $table->text('compulsory_ed_text_kz');
            $table->text('compulsory_ed_text_ru');
            $table->text('compulsory_ed_text_en');
            $table->string('advanced_ed_img');
            $table->text('advanced_ed_text_kz');
            $table->text('advanced_ed_text_ru');
            $table->text('advanced_ed_text_en');
            $table->string('special_ed_img');
            $table->text('special_ed_text_kz');
            $table->text('special_ed_text_ru');
            $table->text('special_ed_text_en');
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
        Schema::dropIfExists('education');
    }
}
