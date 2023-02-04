<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GledalacResource;
use App\Models\Gledalac;

class GledalacController extends Controller
{
    public function index()
    {
        $gledaoci = Gledalac::all();
        return GledalacResource::collection($gledaoci);
    }

    public function show(Gledalac $gledalac)
    {
        return new GledalacResource($gledalac);
    }

    public function update(Request $request,  Gledalac $gledalac)
    {
        $validator = Validator::make($request->all(), [
            'imePrezime' => 'required',
            'brojTelefona' => 'required',
            'godine' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $gledalac->imePrezime = $request->imePrezime;
        $gledalac->brojTelefona = $request->brojTelefona;
        $gledalac->godine = $request->godine;

        $gledalac->save();

        return response()->json(['Uspešno izmenjen gledalac!', new GledalacResource($gledalac)]);
    }

    public function destroy(Gledalac $gledalac)
    {
        $gledalac->delete();
        return response()->json('Uspešno obrisan gledalac!');
    }
}
