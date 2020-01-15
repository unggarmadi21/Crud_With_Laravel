<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arsip extends Model
{
    // use SoftDeletes;
    //
    protected $fillable = ['penyimpanan', 'dokumentasi', 'keamanan', 'sistem'];
}
