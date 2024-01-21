<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PendidikanController extends Controller
{
    public function store(Request $request, $id = null) {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'pengurus' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'body' => 'required',
            'file' => 'mimes:pdf|max:2048',
            'kategorisId' => 'required',
        ]);

        if ($id) {
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            };

            $pendidikan = Pendidikan::findOrFail($id);

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logo->storeAs('public/pendidikan', $logo->hashName());

                Storage::delete('public/pendidikan/'.$pendidikan->logo);
            }
            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $photo->storeAs('public/pendidikan', $photo->hashName());

                Storage::delete('public/pendidikan/'.$pendidikan->photo);
            }
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $file->storeAs('public/pendidikan', $file->hashName());

                Storage::delete('public/pendidikan/'.$pendidikan->file);
            }

            $pendidikan->update([
                'title' => $request->title,
                'logo' => $logo->hashName(),
                'pengurus' => $request->pengurus,
                'photo' => $photo->hashName(),
                'body' => $request->body,
                'file' => $file->hashName(),
            ]);
        } else {
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            };

            $logo = $request->file('logo');
            $logo->storeAs('public/pendidikan', $logo->hashName());

            $photo = $request->file('photo');
            $photo->storeAs('public/pendidikan', $photo->hashName());

            $file = $request->file('file');
            $file->storeAs('public/pendidikan/file', $file->hashName());

            Pendidikan::create([
                'title' => $request->title,
                'logo' => $logo->hashName(),
                'pengurus' => $request->pengurus,
                'photo' => $photo->hashName(),
                'body' => $request->body,
                'file' => $file->hashName(),
                'kategorisId' => $request->kategorisId,
            ]);
        }

        return redirect()->route('pendidikan')->with('success', 'Berhasil Mengunggah Pendidikan');
    }
}
