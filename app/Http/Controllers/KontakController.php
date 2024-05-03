<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function edit() {
        $kontaks = Kontak::latest()->get();

        return view('pages.admin.kontak.index', compact('kontaks'));
    }

    public function update(Request $request) {
        foreach ($request->kontaks as $kontakId => $kontakData) {
            $kontak = Kontak::findOrFail($kontakId);
            $kontak->link = $kontakData['link'];
            $kontak->save();
        }

        return redirect()->route('kontak')->with('success', 'Berhasil Mengubah Kontak Kami');
    }
}