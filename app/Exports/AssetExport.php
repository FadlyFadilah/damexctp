<?php

namespace App\Exports;

use App\Models\Asset;
use App\Models\AssetStatus;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AssetExport implements FromView, ShouldAutoSize
{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function view(): View
    {
        $status = AssetStatus::where('name', $this->nama)->first();
        $ids = $status->id;
        $assets = Asset::with(['category', 'status', 'location', 'media'])->where('status_id', $ids)->get();
        return view('exports.Exports', compact('assets'));
    }
}
