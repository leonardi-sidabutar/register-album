<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_Kebun;

class KebunController extends Controller
{
    //
    public function getKebunByRegional(Request $request)
    {
        $regional = $request->input('regional');

        $kebun = Model_Kebun::where('company',$regional)->get();

        return response()->json($kebun);

        // Periksa apakah regional ada dalam data
        if (isset($kebun)) {
            return response()->json($kebun);
        } else {
            return response()->json([], 404); // Jika tidak ada data untuk regional tersebut, kembalikan response 404 Not Found
        }
    }
}