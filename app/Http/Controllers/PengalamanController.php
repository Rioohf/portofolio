<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengalaman = Pengalaman::orderBy('id', 'desc')->get();
        return view('pengalaman.index', compact('pengalaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengalaman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pengalaman::create([
            'posisi' => $request->posisi,
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
            'tahun' => $request->tahun,
        ]);
        return redirect()->to('pengalaman')->with('message', 'Data Berhasil di Tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengalaman $pengalaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengalaman $pengalaman)
    {
        return view('pengalaman.edit', compact('pengalaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengalaman $pengalaman)
    {
        $pengalaman->update([
            'posisi' => $request->posisi,
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
            'tahun' => $request->tahun,
        ]);

        return redirect()->to('pengalaman')->with('message', 'Data Berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengalaman = Pengalaman::find($id);
        if ($pengalaman) {
            $pengalaman->delete();
        }

        return redirect()->route('pengalaman.index')->with('success', 'Data Berhasil Dihapus');
    }
}
