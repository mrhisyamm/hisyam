<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slide_Show extends Model
{
    use SoftDeletes;

    protected $table = "Slide_Show";

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $fillable = ['gambar','label'];
}
