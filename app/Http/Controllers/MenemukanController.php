<?php

namespace App\Http\Controllers;

use App\Models\Menemukan;
use Illuminate\Http\Request;

class MenemukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menemukans = Menemukan::all();
        return view('menemukans.index', compact('menemukans'));
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
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tipe' => 'required',
            'foto' => 'nullable|image|file|max:1024',
            'keterangan' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable'
        ]);

        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('found-images');
        }

        Menemukan::create($data);

        return redirect()->route('menemukans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menemukan  $menemukan
     * @return \Illuminate\Http\Response
     */
    public function show(Menemukan $menemukan)
    {
        return view('menemukans.show', compact('menemukan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menemukan  $menemukan
     * @return \Illuminate\Http\Response
     */
    public function edit(Menemukan $menemukan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menemukan  $menemukan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menemukan $menemukan)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tipe' => 'required',
            'foto' => 'image|file|max:1024',
            'keterangan' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable'
        ]);

        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('image');
        }

        $request->update($data);

        return redirect()->route('menemukans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menemukan  $menemukan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menemukan $menemukan)
    {
        $menemukan->delete();

        return redirect()->route('menemukans.index');
    }
}
