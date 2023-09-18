<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiskonRequest;
use App\Models\Diskon;
use Illuminate\Http\Request;

class DiskonController extends Controller
{
    public function index()
    {
        $diskons = Diskon::all();
        return response()->json([
            "success" => true,
            "message" => "Diskon List",
            "data" => $diskons
        ]);
    }

    public function store(DiskonRequest $request)
    {
        $diskons = Diskon::create([
            'total_sebelum_diskon' => $request->total_sebelum_diskon,
            'total_diskon' => $request->total_diskon,
            'total_harga_diskon' => ($request->total_sebelum_diskon * $request->total_diskon / 100),
            'total_harga_setelah_diskon' => $request->total_sebelum_diskon - ($request->total_sebelum_diskon * $request->total_diskon / 100),
        ]);
 
        return response()->json([
            "success" => true,
            "message" => "Diskon created successfully.",
            "data" => $diskons
        ]);
    } 
}
