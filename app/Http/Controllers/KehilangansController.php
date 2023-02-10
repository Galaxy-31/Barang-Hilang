<?php

namespace App\Http\Controllers;

use App\Models\Kehilangan;
use Illuminate\Http\Request;

class KehilangansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kehilangans = Kehilangan::get();
        return view('kehilangans.index', compact('kehilangans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tipe' => 'required',
            'foto' => 'nullable|image|file|max:1024',
            'keterangan' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
        ]);

        if($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('image');
        }

        Kehilangan::create($data);

        return redirect()->route('kehilangans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function show(Kehilangan $kehilangan)
    {
        return view('kehilangans.show', compact('kehilangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kehilangan $kehilangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kehilangan $kehilangan)
    {
        $data = request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tipe' => 'required',
            'foto' => 'nullable|file|image|max:1024',
            'keterangan' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
        ]);

        if($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('lost-images');
        }

        $kehilangan->update($data);

        return route('kehilangans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kehilangan $kehilangan)
    {
        $kehilangan->delete();

        return view('kehilangans.index');
    }
}
