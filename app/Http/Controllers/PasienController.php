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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
