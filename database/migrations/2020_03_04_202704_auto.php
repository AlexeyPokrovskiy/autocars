<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Auto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->bigIncrements('id');
            //тип автомобиля: 1 - новый / 2 -  с пробегом
            $table->tinyInteger('type')->nullable();
            //ссылка на справочник ref_core
            $table->integer('core_id')->unsigned()->nullable();
            //число: цена в $
            $table->integer('price')->nullable();
            //справочник: название платформы(autoria,olx,rst)
            $table->string('platform_id')->nullable();
            //строка: путь к карточке авто на платформе(autoria,olx,rst)
            $table->string('platform_url')->nullable();
            //справочник: статус продажи
            $table->integer('status_id')->unsigned()->nullable();
            //число: 1-растаможен или 2-нет
            $table->tinyInteger('customs_id')->unsigned()->nullable();
            //справочник состояние: требует ремонта, не требует, битый, ...
            $table->integer('state_id')->unsigned()->nullable();
            //справочник: ссылка на ref_color
            $table->integer('color_id')->unsigned()->nullable();
            //bool: цвет металлик (0 или 1)
            $table->tinyInteger('is_metallic')->nullable();
            //число: год производства 2023
            $table->smallInteger('year')->nullable();
            //строка: VIN код
            $table->string('vin', 20)->nullable();
            //число: пробег, км
            $table->integer('run')->unsigned()->nullable();
            //строка: главная картинка
            $table->string('img')->nullable();
            //строка: json массив картинок
            $table->text('images')->nullable();
            //строка: массив опций
            $table->text('equipment')->nullable();
            //строка: описание
            $table->text('description')->nullable();
            //справочник: расположение руля (1-лево, 2-право)
            $table->tinyInteger('wheel')->nullable();
            //временные метки
            $table->timestamps();


            $table->foreign('state_id')
                ->references('id')
                ->on('ref_state');

            $table->foreign('status_id')
                ->references('id')
                ->on('ref_status');

            $table->foreign('core_id')
                ->references('id')
                ->on('ref_core');

            $table->foreign('color_id')
                ->references('id')
                ->on('ref_color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
