<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $table = "event";
    public $timestamps = false;
    protected $fillable = [
        'kategori_id', 'nama_event', 'lokasi_event', 'thumbnail_event',  'kuota_event', 'deskripsi_event', 'tanggal_event'
    ];
    public function eventCategory(){
        return $this->belongsTo(EventCategory::class,'kategori_id','id');
    }
    public function event(){
        return $this->hasMany(EventRegistration::class,'event_id','id');
    }
    
}
