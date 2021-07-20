<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artis extends Model
{
    protected $table = "artists";
    protected $fillable = ['artist_id', 'artist_name'];
    use HasFactory;
}
