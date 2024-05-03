<?php

namespace App\Http\Controllers;

use App\Models\Histori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HistoriController extends Controller
{
    public function edit () {
        $history = Histori::latest()->first();

        return view('pages.admin.histori.index', compact('history'));
    }

    public function update (Request $request) {
        $validator = Validator::make($request->all(), [
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('histori')->withErrors($validator)->withInput();
        }

        $historyId = Histori::latest()->first()->id;
        $history = Histori::find($historyId);

        $history->update([
            'body' => $request->body
        ]);

        return redirect()->route('histori')->with('success', 'Berhasil Mengubah Sejarah Singkat');
    }
}