<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gledalac extends Model
{
    use HasFactory;

    protected $table = 'gledaoci';

    protected $fillable = [
        'imePrezime',
        'brojTelefona',
        'godine',
    ];
    public function rezervacije()
    {
        return $this->hasMany(Rezervacija::class);
    }
}
