<?php

namespace App\Http\Controllers;

use App\Http\Requests\PajakRequest;
use App\Models\Pajak;
use Illuminate\Http\Request;
class PajakController extends Controller
{
    public function index()
    {
        $pajaks = Pajak::all();
        return response()->json([
            "success" => true,
            "message" => "Pajak List",
            "data" => $pajaks
        ]);
    }

    public function store(PajakRequest $request)
    {
        $pajak = Pajak::create([
            'total' => $request->total,
            'persen_pajak' => $request->persen_pajak,
            'net_sales' => $request->total / (1 + $request->persen_pajak / 100),
            'pajak_rp' => $request->total - ($request->total / (1 + $request->persen_pajak / 100))
        ]);
 
        return response()->json([
            "success" => true,
            "message" => "Pajak created successfully.",
            "data" => $pajak
        ]);
    } 
}
