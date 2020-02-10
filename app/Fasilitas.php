<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $fillable = ['foto','nama_fasilitas'];
    public $timestamps = true;

    public function fasilitas()
    {
        return $this->belongsTo('App\Fasilitas');
    }
}
