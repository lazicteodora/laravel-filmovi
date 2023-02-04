<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\RezervacijaResource;
use App\Models\Rezervacija;

class RezervacijaController extends Controller
{
    public function index()
    {
        $rezervacije = Rezervacija::all();
        return RezervacijaResource::collection($rezervacije);
    }

    public function destroy(Rezervacija $rezervacija)
    {
        $rezervacija->delete();
        return response()->json('Uspešno obrisana rezervacija!');
    }
}
