<?php

namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model;

class Status extends Model {

    /**
     * Отключение временных меток на создание / изменение
     * @var bool
     */
    public $timestamps = false;

    /**
     * Таблица в базе
     * @var string
     */
    protected $table = 'ref_status';

    /**
     * Поля доступные для записи
     * @var array
     */
    protected $fillable = ['name', 'code', 'icon', 'color', 'sort'];

    /**
     * Преобразование типов при получении из базы
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sort' => 'integer',
    ];

}
