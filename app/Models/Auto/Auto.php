<?php

namespace App\Models\Auto;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    /**
     * Таблица в базе
     *
     * @var string
     */
    protected $table = 'auto';

    /**
     * Поля доступные для записи
     *
     * @var array
     */
    protected $fillable = [
        "type",
        "slug",
        "core_id",
        "mark_id",
        "model_id",
        "region_id",
        "cities_id",
        "price",
        "phone",
        "platform_id" ,
        "platform_url",
        "status_id",
        "customs_id",
        "state_id",
        "is_metallic",
        "year",
        "vin",
        "transmission_id",
        "volume",
        "run" ,
        "fuel_id" ,
        "img",
        "images",
        "equipment",
        "description",
        "wheel",
    ];


    /**
     * Даты
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Преобразование типов при получении из базы
     *
     * @var array
     */
    protected $casts = [
        'price' => 'integer',
        'fuel_id' => 'integer',
        'run' => 'integer',
    ];




    public function scopeLastAuto($query,$limit = 5){
        return $query->with('region','city','core','fuel','status','model')->orderBy("created_at","desc")->limit($limit);
    }








    /**
     * Информация основного справочника для данного автомобиля
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function core()
    {
        return $this->belongsTo('App\Models\Ref\CoreRef', 'core_id', 'id');
    }

    /**
     * Модель АВТО через промежуточные
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function model()
    {
        return $this->belongsTo('App\Models\Ref\ModelCar', 'model_id', 'id');
    }

    /**
     * Марка АВТО
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mark()
    {
        return $this->belongsTo('App\Models\Ref\Mark', 'mark_id', 'id');
    }

    /**
     * Цвет
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function color()
    {
        return $this->belongsTo('App\Models\Ref\Color', 'color_id', 'id');
    }

    /**
     * Состояние
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo('App\Models\Ref\State', 'state_id', 'id');
    }

    /**
     * Статус продажи
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo('App\Models\Ref\Status', 'status_id', 'id');
    }

    /**
     * Город
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\Models\Ref\City', 'cities_id', 'city_id');
    }

    /**
     * Область
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo('App\Models\Ref\Region', 'region_id', 'region_id');
    }

    /**
     * Тип топлива
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fuel()
    {
        return $this->belongsTo('App\Models\Ref\Fuel', 'fuel_id', 'id');
    }

    /**
     * Тип трансмиссии
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transmission()
    {
        return $this->belongsTo('App\Models\Ref\Transmission', 'transmission_id', 'id');
    }
}
