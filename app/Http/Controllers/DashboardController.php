<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $prestasies = Prestasi::latest()->get();
        $kegiatans = Kegiatan::latest()->get();

        return view('pages.admin.dashboard', compact('prestasies', 'kegiatans'));
    }
}
