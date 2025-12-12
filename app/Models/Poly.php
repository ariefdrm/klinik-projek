<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poly extends Model
{
    /** @use HasFactory<\Database\Factories\PolyFactory> */
    use HasFactory;

    protected $fillable = [
        'nama', 'biaya'
    ];
}
