<?php

namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model;

/**
 * Марки автомобилей
 */
class Mark extends Model
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
    protected $table = 'ref_mark';

    /**
     * Поля доступные для записи
     *
     * @var array
     */
    protected $fillable = [
        'xml_mark',
        'name',
        'code',
        'is_popular',
        'sort'
    ];

    /**
     * Преобразование типов при получении из базы
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'xml_mark' => 'integer',
        'is_popular' => 'integer',
        'sort' => 'integer',
    ];

    /**
     * Модели
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function model()
    {
        return $this->hasMany('App\Models\Ref\Model', 'mark_id', 'id');
    }
}
