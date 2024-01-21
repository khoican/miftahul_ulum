<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index()
    {
        $kategories = Kategori::all();

        return view('pages.admin.pendidikan.index', compact('kategories'));
    }

    public function create() {
        return view('pages.admin.pendidikan.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('pendidikan.create')->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
        $image->storeAs('public/kategori', $image->hashName());

        Kategori::create([
            'name' => $request->name,
            'image' => $image->hashName(),
        ]);

        return redirect()->route('pendidikan')->with('success', 'Berhasil Mengunggah Kategori Pendidikan');
    }

    public function edit(string $id) {
        $kategori = Kategori::findOrFail($id);
        $pendidikan = Pendidikan::where('kategorisId', $id)->first();

        return view('pages.admin.pendidikan.edit', compact('kategori', 'pendidikan'));
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('pendidikan.edit')->withErrors($validator)->withInput();
        }

        $kategori = Kategori::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/kategori', $image->hashName());

            Storage::delete('public/kategori/'.$kategori->image);

            $kategori->update([
                'name' => $request->name,
                'image' => $image->hashName(),
            ]);
        } else {
            $kategori->update([
                'name' => $request->name,
            ]);
        }

        return redirect()->route('pendidikan')->with('success', 'Berhasil Mengubah Kategori Pendidikan');
    }

    public function destroy($id) {
        $pendidikan = Pendidikan::where('kategorisId', $id)->first();
        $logo = $pendidikan->logo;
        $photo = $pendidikan->photo;
        $file = $pendidikan->file;
        $pendidikan->delete();
        Storage::delete('public/pendidikan/'.$logo);
        Storage::delete('public/pendidikan/'.$photo);
        Storage::delete('public/pendidikan/'.$file);

        $kategori = Kategori::findOrFail($id);
        $image = $kategori->image;
        $kategori->delete();
        Storage::delete('public/kategori/'.$image);

        return redirect()->route('pendidikan')->with('success', 'Berhasil Menghapus Kategori Pendidikan');
    }
}
