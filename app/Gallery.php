<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['foto','nama_gallery'];
    public $timestamps = true;

    public function gallery()
    {
        return $this->belongsTo('App\gallery');
    }
}
