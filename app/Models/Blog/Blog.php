<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = array('title','slug','image','short_description','description','published','meta_title','meta_description');
    protected $table = 'blog';


    //Mutators
    public function setSlugAttribute($value){
        $this->attributes['slug']= Str::slug(mb_substr( $this->title,0,40)."-".\Carbon\Carbon::now()->format('dmyHi'),'-');
    }

}
