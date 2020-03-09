<?php

namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    /**
     * Отключение временных меток на создание / изменение
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Таблица в базе
     *
     * @var string
     */
    protected $table = 'ref_color';

    /**
     * Поля доступные для записи
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'match',
        'sort',
    ];

    /**
     * Преобразование типов при получении из базы
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sort' => 'integer',
    ];
}
