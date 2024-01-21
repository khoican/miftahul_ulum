<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KegiatanController extends Controller
{
    public function index() {
        $kegiatans = Kegiatan::latest()->get();

        return view('pages.admin.kegiatan.index', compact('kegiatans'));
    }

    public function create() {;
        return view('pages.admin.kegiatan.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('kegiatan.create')->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
        $image->storeAs('public/kegiatan', $image->hashName());

        Kegiatan::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image->hashName(),
        ]);

        return redirect()->route('kegiatan')->with('success', 'Berhasil Mengunggah Kegiatan');
    }

    public function edit(string $id) {
        $kegiatan = Kegiatan::findOrFail($id);

        return view('pages.admin.kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'title',
            'body',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $kegiatan = Kegiatan::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/kegiatan', $image->hashName());

            Storage::delete('public/kegiatan/'.$kegiatan->image);

            $kegiatan->update([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $image->hashName(),
            ]);
        } else {
            $kegiatan->update([
                'title' => $request->title,
                'body' => $request->body,
            ]);
        }

        return redirect()->route('kegiatan')->with('success', 'Berhasil Memperbarui Kegiatan');
    }

    public function destroy($id) {
        $kegiatan = Kegiatan::findOrFail($id);
        Storage::delete('public/kegiatan/'.$kegiatan->image);
        $kegiatan->delete();

        return redirect()->route('kegiatan')->with('success', 'Berhasil Menghapus Kegiatan');
    }
}
