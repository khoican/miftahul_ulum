<?php

namespace App\Http\Controllers;

use App\Models\Histori;
use App\Models\Kategori;
use App\Models\Kegiatan;
use App\Models\Kontak;
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
        $kontaks = Kontak::latest()->get();
        $histori = Histori::latest()->first();

        return view('pages.user.home', compact('prestasies', 'kegiatans', 'kategories', 'pendidikans', 'kontaks', 'histori'));
    }

    public function pendidikan(string $slug) {
        $kategories = Kategori::latest()->get();
        $pendidikan = Pendidikan::all();
        $jenis = Kategori::where('slug', $slug)->first();
        $kontaks = Kontak::latest()->get();

        return view('pages.user.pendidikan', compact('pendidikan', 'kategories', 'jenis', 'kontaks'));
    }

    public function prestasi() {
        $kategories = Kategori::latest()->get();
        $portals = Prestasi::latest()->get();
        $kontaks = Kontak::latest()->get();
        // dd($kontaks);

        return view('pages.user.portal', compact('portals', 'kategories', 'kontaks'));
    }

    public function kegiatan() {
        $kategories = Kategori::latest()->get();
        $portals = Kegiatan::latest()->get();
        $kontaks = Kontak::latest()->get();

        return view('pages.user.portal', compact('portals', 'kategories', 'kontaks'));
    }

    public function detailPrestasi(string $slug) {
        $detail = Prestasi::where('slug', $slug)->first();
        $recomendations = Prestasi::latest()->paginate(3);
        $kategories = Kategori::latest()->get();
        $kontaks = Kontak::latest()->get();

        return view('pages.user.detailPortal', compact('detail', 'recomendations', 'kategories', 'kontaks'));
    }

    public function detailKegiatan(string $slug) {
        $detail = Kegiatan::where('slug', $slug)->first();
        $recomendations = Kegiatan::latest()->paginate(3);
        $kategories = Kategori::latest()->get();
        $kontaks = Kontak::latest()->get();

        return view('pages.user.detailPortal', compact('detail', 'recomendations', 'kategories', 'kontaks'));
    }
}