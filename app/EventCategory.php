<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class EventCategory extends Model
{   
    public $table = "event_category";
    public $timestamps = false;
    protected $fillable = [
        'nama_kategori_event'
    ];
    public function event(){
        return $this->hasMany(Event::class,'kategori_id','id');
    }
    public function threeEvent()
    {
        return $this->hasMany(Event::class,'kategori_id','id')->limit(3);
    }
}
