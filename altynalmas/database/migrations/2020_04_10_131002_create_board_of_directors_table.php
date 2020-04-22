<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardOfDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_of_directors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_url');
            $table->string('name_kz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->text('position_kz');
            $table->text('position_ru');
            $table->text('position_en');
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
        Schema::dropIfExists('board_of_directors');
    }
}
