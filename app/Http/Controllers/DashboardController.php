<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kegiatan;
use App\Models\Prestasi;
use App\Models\Pendidikan;

class DashboardController extends Controller
{
    public function dashboard() {
        $prestasies = Prestasi::latest()->get();
        $kegiatans = Kegiatan::latest()->get();

        return view('pages.admin.dashboard', compact('prestasies', 'kegiatans'));
    }

    public function home() {
        $prestasies = Prestasi::first();
        $kegiatans = Kegiatan::latest()->paginate(4);
        $kategories = Kategori::latest()->get();
        $pendidikans = Pendidikan::latest()->get();

        return view('pages.user.home', compact('prestasies', 'kegiatans', 'kategories', 'pendidikans'));
    }

    public function pendidikan(string $id) {
        $kategories = Kategori::latest()->get();
        $pendidikan = Pendidikan::where('kategorisId', $id)->first();
        $jenis = Kategori::where('id', $id)->first();

        return view('pages.user.pendidikan', compact('pendidikan', 'kategories', 'jenis'));
    }

    public function prestasi() {
        $kategories = Kategori::latest()->get();
        $portals = Prestasi::latest()->get();

        return view('pages.user.portal', compact('portals', 'kategories'));
    }

    public function kegiatan() {
        $kategories = Kategori::latest()->get();
        $portals = Kegiatan::latest()->get();

        return view('pages.user.portal', compact('portals', 'kategories'));
    }

    public function detailPrestasi(string $id) {
        $detail = Prestasi::where('id', $id)->first();
        $recomendations = Prestasi::latest()->get();
        $kategories = Kategori::latest()->get();

        return view('pages.user.detailPortal', compact('detail', 'recomendations', 'kategories'));
    }

    public function detailKegiatan(string $id) {
        $detail = Kegiatan::where('id', $id)->first();
        $recomendations = Kegiatan::latest()->get();
        $kategories = Kategori::latest()->get();

        return view('pages.user.detailPortal', compact('detail', 'recomendations', 'kategories'));
    }
}
