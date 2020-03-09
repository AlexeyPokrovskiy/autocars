<?php

namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

    /**
     * Отключение временных меток на создание / изменение
     * @var bool
     */
    public $timestamps = false;

    /**
     * Таблица в базе
     * @var string
     */
    protected $table = 'ref_state';

    /**
     * Поля доступные для записи
     * @var array
     */
    protected $fillable = ['name', 'code', 'sort'];

    /**
     * Преобразование типов при получении из базы
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sort' => 'integer',
    ];

}
