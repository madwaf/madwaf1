<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = ['track_id', 'track_name', 'artist_id', 'album_id', 'time'];
    use HasFactory;
}
