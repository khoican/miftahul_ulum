<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PrestasiController extends Controller
{
    public function index() {
        $prestasies = Prestasi::latest()->get();

        return view('pages.admin.prestasi.index', compact('prestasies'));
    }

    public function create() {;
        return view('pages.admin.prestasi.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('prestasi.create')->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
        $image->storeAs('public/prestasi', $image->hashName());

        Prestasi::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image->hashName(),
        ]);

        return redirect()->route('prestasi')->with('success', 'Berhasil Mengunggah Prestasi');
    }

    public function edit(string $id) {
        $prestasi = Prestasi::findOrFail($id);

        return view('pages.admin.prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'body',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('prestasi.edit')->withErrors($validator)->withInput();
        }

        $prestasi = Prestasi::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/prestasi', $image->hashName());

            Storage::delete('public/prestasi/'.$prestasi->image);

            $prestasi->update([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $image->hashName(),
            ]);
        } else {
            $prestasi->update([
                'title' => $request->title,
                'body' => $request->body,
            ]);
        }

        return redirect()->route('prestasi')->with('success', 'Berhasil Memperbarui Unggahan Prestasi');
    }

    public function destroy($id) {
        $prestasi = Prestasi::findOrFail($id);
        Storage::delete('public/prestasi/'.$prestasi->image);
        $prestasi->delete();

        return redirect()->route('prestasi')->with('success', 'Berhasil Menghapus Unggahan Prestasi');
    }

}
