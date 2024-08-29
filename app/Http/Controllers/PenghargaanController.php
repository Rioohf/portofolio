<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Penghargaan;
use Illuminate\Http\Request;

class PenghargaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penghargaan = Penghargaan::orderBy('id', 'desc')->get();
        return view('penghargaan.index', compact('penghargaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $education = Education::get();
        return view('penghargaan.create', compact('education'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Penghargaan::create([
            'education_id' => $request->education_id,
            'juara' => $request->juara,
            'perlombaan' => $request->perlombaan,
            'tahun_lomba' => $request->tahun_lomba,
        ]);
        return redirect()->to('penghargaan')->with('message', 'Data Berhasil di Tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penghargaan $penghargaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penghargaan $penghargaan)
{
    $education = Education::get();
    return view('penghargaan.edit', compact('education', 'penghargaan'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penghargaan $penghargaan)
    {
        Penghargaan::where('id', $penghargaan)->update([
            'education_id' => $request->education_id,
            'juara' => $request->juara,
            'perlombaan' => $request->perlombaan,
            'tahun_lomba' => $request->tahun_lomba,
        ]);

        return redirect()->to('penghargaan')->with('message', 'Data Berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penghargaan $penghargaan)
    {
        Penghargaan::where('id', $penghargaan)->delete();
        return redirect()->to('penghargaan')->with('message', 'Data Berhasil di Hapus!');
    }
}
