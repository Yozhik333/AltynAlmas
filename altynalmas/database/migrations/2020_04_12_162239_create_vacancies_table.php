<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_kz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->text('requirements_kz');
            $table->text('requirements_ru');
            $table->text('requirements_en');
            $table->text('conditions_kz');
            $table->text('conditions_ru');
            $table->text('conditions_en');
            $table->text('duties_kz');
            $table->text('duties_ru');
            $table->text('duties_en');
            $table->string('hh_url');
            $table->boolean('is_active');
            $table->string('apply')->nullable();
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
        Schema::dropIfExists('vacancies');
    }
}
