<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $guarded = 'id';
    protected $fillable = ['judul', 'description', 'image', 'conten'];
}
