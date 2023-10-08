<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Staudenmeir\EloquentEagerLimit\HasEagerLimit;

class img extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia , HasEagerLimit ;

    protected $fillable = [
        'id',
        'title',
       
    ];
}