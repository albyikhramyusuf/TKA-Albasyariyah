<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['foto','nama_agenda'];
    public $timestamps = true;


}
