<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    use HasFactory;

    protected $table = 'rezervacije';

    protected $fillable = [
        'iznos',
        'sediste',
        'nacinPlacanja',
        'gledalac_id',
        'film_id',
    ];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function gledalac()
    {
        return $this->belongsTo(Gledalac::class);
    }
}
