<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pasien = pasien::latest()
            ->where('name', 'like', '%' .  request('cari') . '%')
            ->paginate(10);
        $data["pasien"] = $pasien;

        return view("pasien_index", $data);
    }

    // public function index(Request $request)
    // {
    //     $search = $request->query('search'); // Get the 'search' query parameter

    //     $query = pasien::query();

    //     if ($search) {
    //         $query->where('nama', 'like', "%{$search}%")
    //             ->orWhere('no_pasien', 'like', "%{$search}%");
    //     }

    //     $pasien = $query->latest()->paginate(10);

    //     // Make sure the search query stays in pagination links
    //     $pasien->appends(['search' => $search]);

    //     return view('pasien_index', ['pasien' => $pasien]);
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pasien_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        $requestData = $request->validate([
            'no_pasien' => 'required|unique:pasiens,no_pasien',
            'name' => 'required',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'alamat' => 'nullable',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        $pasien = new pasien(); //membuat objek kosong
        $pasien->fill($requestData); //mengisi objek dengan data yang sudah divalidasi requestData

        $pasien->foto = $request->file('foto')->store('public'); //mengisi objek dengan pathFoto

        $pasien->save();

        return back()->with('pesan', 'Data sudah disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
