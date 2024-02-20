<?php

namespace App\Http\Controllers;

use App\Models\Dudi;
use Illuminate\Http\Request;

class DudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get posts
        $dudi = Dudi::latest()->paginate(5);

        //render view with posts
        return view('dudi.index', compact('dudi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dudi.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form
    $this->validate($request, [
        'nama'  => 'required',
        'alamat' => 'required',
    ]);

    // Create dudi
    Dudi::create([
        'nama'  => $request->nama,
        'alamat' => $request->alamat,
    ]);

    // Redirect to index
    return redirect()->route('dudi.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function edit(Dudi $dudi)
    {
        return view('dudi.edit', compact('dudi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dudi $dudi)
    {
        // Validate form
        $this->validate($request, [
            'nama'  => 'required',
            'alamat' => 'required',
        ]);

        // Update dudi
        $dudi->update([
            'nama'  => $request->nama,
            'alamat' => $request->alamat,
        ]);

        // Redirect to index
        return redirect()->route('dudi.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dudi $dudi)
    {
       //delete siswa
       $dudi->delete();

       //redirect to index
       return redirect()->route('dudi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

