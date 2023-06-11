<?php

namespace App\Http\Controllers;
use App\Models\distributor;
use App\Models\pembelian;
use Illuminate\Http\Request;


class distributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $distributor = distributor::all();
        return view('distributor.index', [
            'distributor' => $distributor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'nama_distributor' => 'required',
        'alamat' => 'required',
        'telp'   => 'required'
        ]);
        $array = $request->only([
        'nama_distributor', 'alamat', 'telp'
        ]);
        $distributor = distributor::create($array);
        return redirect()->route('distributor.index')->with('success_message', 'Berhasil menambah Distributor baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $distributor = distributor::find($id);
        if (!$distributor) return redirect()->route('distributor.index')->with('error_message', 'distributor dengan id = '.$id.' tidak ditemukan');
        return view('distributor.edit', [
        'distributor' => $distributor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'telp' => 'required'
            ]);
            $distributor = distributor::find($id);
            $distributor->nama_distributor = $request->nama_distributor;
            $distributor->alamat = $request->alamat;
            $distributor->telp = $request->telp;
            $distributor->save();
            return redirect()->route('distributor.index')->with('success_message', 'Berhasil mengubah Distributor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $distributor = distributor::find($id);

        if ($distributor) $distributor->delete();
        return redirect()->route('distributor.index')->with('success_message', 'Berhasil menghapus distributor');
    }
}
