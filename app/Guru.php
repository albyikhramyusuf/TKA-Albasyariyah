<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['foto','nama_guru','jabatan'];
    public $timestamps = true;

    public function guru()
    {
        return $this->belongsTo('App\Guru');
    }
}
