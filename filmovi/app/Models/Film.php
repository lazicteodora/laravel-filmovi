<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'filmovi';

    protected $fillable = [

        'naziv',
        'zanr',
        'brojSale',
        'nacinPrevodjenja',
    ];

    public function rezervacije()
    {
        return $this->hasMany(Rezervacija::class);
    }
}
