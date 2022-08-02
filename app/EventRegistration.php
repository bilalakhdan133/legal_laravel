<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{   
    
    public $timestamps = false;
    protected $fillable = [
        'event_id', 'nama_depan', 'nama_belakang', 'domisili', 'perusahaan_instansi',  'pekerjaan', 'email', 'nomor_telepon'
    ];
    public function event(){
        return $this->belongsTo(Event::class,'event_id','id');
    }
}
