<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


    protected $fillable=['title','body','user_id'];


    /*indicarle a articulos qu epose una realicon con usuarios de muchso a uno*/
    public function articles()
    {
        $this->belongTo(User::class);
    }


}
