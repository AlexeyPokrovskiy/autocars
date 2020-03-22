<?php

namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model;

/**
 * Модификации, основной справочник системы
 */
class CoreRef extends Model
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
    protected $table = 'ref_core';

    /**
     * Поля доступные для записи
     *
     * @var array
     */
    protected $fillable = [
        'mark_id',
        'model_id',
        'xml_modification',
        'xml_generation',
        'xml_configuration',
        'xml_tech',
        'folder',
        'modification',
        'body_type',
        'years',
        'generation',
        'volume',
        'fuel',
        'transmission',
        'horse_power',
        'kwt',
        'drive',
        'body',
        'doors_count',
        'year_from',
        'year_to',
    ];

    /**
     * Преобразование типов при получении из базы
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'mark_id' => 'integer',
        'model_id' => 'integer',
        'xml_modification' => 'integer',
        'xml_generation' => 'integer',
        'xml_configuration' => 'integer',
        'xml_tech' => 'integer',
        'volume' => 'float',
        'kwt' => 'float',
        'horse_power' => 'integer',
        'year_from' => 'integer',
        'year_to' => 'integer',
        'doors_count' => 'integer',
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

    /**
     * Модель
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function model()
    {
        return $this->belongsTo('App\Models\Ref\ModelCar', 'model_id', 'id');
    }

    /**
     * Модель
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cars()
    {
        return $this->belongsTo('App\Models\Auto\Auto', 'id', 'core_id');
    }
}
