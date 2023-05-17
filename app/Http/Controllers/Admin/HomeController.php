<?php

namespace App\Http\Controllers\Admin;

use App\Exports\AssetExport;
use App\Models\Asset;
use App\Models\AssetCategory;
use App\Models\AssetLocation;
use App\Models\AssetStatus;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController
{
    public function index()
    {
        $lokasi = AssetLocation::withCount('assets')->get();
        $status = AssetStatus::withCount('assets')->get();

        return view('home', compact('lokasi', 'status'));
    }

    public function detail ($name)
    {

        $status = AssetStatus::where('name', $name)->first();
        $ids = $status->id;
        $assets = Asset::with(['category', 'status', 'location', 'media'])->where('status_id', $ids)->get();

        return view('details', compact('assets', 'name'));
    }
    
    public function export(Request $request)
    {
        $nama = $request->input('nama');

        return Excel::download(new AssetExport($nama), 'Laporan Asset ' . $nama . '.xlsx');
    }
}
