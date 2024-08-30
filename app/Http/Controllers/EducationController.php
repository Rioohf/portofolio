<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Models\Profile;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education = Education::orderBy('id', 'desc')->get();
        return view('education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profiles = Profile::get();
        return view('education.create', compact('profiles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Education::create([
            'profile_id' => $request->profile_id,
            'nama_sekolah' => $request->nama_sekolah,
            'jurusan' => $request->jurusan,
            'tahun_lulus' => $request->tahun_lulus,
        ]);
        return redirect()->to('education')->with('message', 'Data Berhasil di Tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $education = Education::findOrFail($id);
        $profiles = Profile::get();
        return view('education.edit', compact('profiles', 'education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $education->update([
            'profile_id' => $request->profile_id,
            'nama_sekolah' => $request->nama_sekolah,
            'jurusan' => $request->jurusan,
            'tahun_lulus' => $request->tahun_lulus,
        ]);

        return redirect()->to('education')->with('message', 'Data Berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        if ($education) {
            $education->delete();
        }

        return redirect()->route('education.index')->with('success', 'Data Berhasil Dihapus');
    }
}
