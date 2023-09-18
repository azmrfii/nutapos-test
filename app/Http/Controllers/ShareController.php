<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShareRequest;
use App\Models\Share;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function index()
    {
        $shares = Share::all();
        return response()->json([
            "success" => true,
            "message" => "Share List",
            "data" => $shares
        ]);
    }

    public function store(ShareRequest $request)
    {
        $shares = Share::create([
            'harga_sebelum_markup' => $request->harga_sebelum_markup,
            'markup_persen' => $request->markup_persen,
            'share_persen' => $request->share_persen,
            'net_untuk_resto' => ($request->harga_sebelum_markup * $request->markup_persen / 100),
            'share_untuk_ojol' => ($request->harga_sebelum_markup * $request->share_persen / 100),
        ]);
 
        return response()->json([
            "success" => true,
            "message" => "Share created successfully.",
            "data" => $shares
        ]);
    } 
}
