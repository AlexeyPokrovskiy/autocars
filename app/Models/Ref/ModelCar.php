<?php

namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model;

/**
 * Модели автомобилей
 */
class ModelCar extends Model
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
    protected $table = 'ref_model';

    /**
     * Поля доступные для записи
     *
     * @var array
     */
    protected $fillable = [
        'xml_model',
        'xml_generation',
        'mark_id',
        'name',
        'code',
        'is_popular',
    ];

    /**
     * Преобразование типов при получении из базы
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'xml_model' => 'integer',
        'xml_generation' => 'integer',
        'mark_id' => 'integer',
        'is_popular' => 'integer',
    ];

    /**
     * Марка
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mark()
    {
        return $this->belongsTo('App\Models\Ref\Mark', 'mark_id', 'id');
    }
}
