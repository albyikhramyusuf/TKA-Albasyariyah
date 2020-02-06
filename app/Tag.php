<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama_tag', 'slug'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->belongsTo('App\tag', 'artikel_tag', 'tag_id', 'artikel_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($kategori) {
            //mengecek apakah penulisan masih punya buka
            if ($kategori->artikel->count() > 0) {
                //menyiapkan pesan eror
                $html = 'kategori tidak dapat di hapus karena masih memiliki artikel : ';
                $html = '<ul>';
                foreach ($kategori->artikel as$data) {
                    $html .= "<li>$data->judul< /li>";
                }
                $html .= '</ul>';
                Session::flash("flash_notification", [
                    "level" => "danger",
                    "message" => $html
                ]);
                // membatalkan proses penghapusan
                return false;
            }
        });
    }
}
