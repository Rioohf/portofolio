<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::orderBy('id', 'desc')->get();
        return view('profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_lengkap' => 'required|string|max:55',
            'no_telpon' => 'required|string|max:15',
            'email' => 'required|string|email|max:55',
            'deskripsi' => 'nullable|string',
            'facebook' => 'nullable|url',
            'x' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'alamat' => 'required|string|max:250'

        ]);

        //Menghanddle file upload-an:
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $path = $gambar->store('public/image');
            $name = basename($path); //menyimpan nama filenya saja

        }
        // Insert into profiles () values():
        Profile::create([
            'gambar' => $name,
            'nama_lengkap' => $request->nama_lengkap,
            'no_telpon' => $request->no_telpon,
            'email' => $request->email,
            'deskripsi' => $request->deskripsi,
            'facebook' => $request->facebook,
            'x' => $request->x,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'alamat' => $request->alamat

        ]);
        return redirect()->route('profile.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
 * Show the form for editing the specified resource.
 */
public function edit($id)
{
    $data = Profile::findOrFail($id);
    return view('profile.edit', compact('data'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, $id)
{
    $profile = Profile::findOrFail($id);
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_lengkap' => 'required|string|max:55',
            'no_telpon' => 'required|string|max:15',
            'email' => 'required|string|email|max:55',
            'deskripsi' => 'nullable|string',
            'facebook' => 'nullable|url',
            'x' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'alamat' => 'nullable|string|max:250'

        ]);
        // Simpan gambar jika ada di upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada:
            if ($profile->gambar) {
                Storage::delete('public/image/' . $profile->gambar);
            }
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path);
            $profile->gambar = $name;
        }
        $profile->nama_lengkap = $request->nama_lengkap;
        $profile->alamat = $request->alamat;
        $profile->no_telpon = $request->no_telpon;
        $profile->email = $request->email;
        $profile->facebook = $request->facebook;
        $profile->x = $request->x;
        $profile->linkedin = $request->linkedin;
        $profile->instagram = $request->instagram;
        $profile->deskripsi = $request->deskripsi;
        $profile->save();

        return redirect()->route('profile.index')->with('success', 'Update Profile Berhasil');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $id)
    {
        Profile::where('id', $id)->delete();
        return redirect()->to('profile')->with('message', 'Data Berhasil di Hapus!');
    }
}
