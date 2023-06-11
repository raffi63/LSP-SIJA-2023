<?php

namespace App\Http\Controllers;
use App\Models\pembelian;
use App\Models\distributor;
use App\Models\User;
use Illuminate\Http\Request;

class pembelianController extends Controller
{
    public function index()
    {
        $pembelian = pembelian::all();
        return view('pembelian.index', [
            'pembelian' => $pembelian
        ]);
    }


    public function create()
    {
        return view(
        'pembelian.create', [
        'distributor' => distributor::all(),
        'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        //
        $request->validate([
        'nonota_beli' => 'required',
        'tgl_beli' => 'required',
        'total_beli' => 'required',
        'id_distributor' => 'required',
        'id_users' => 'required'
        ]);
        $array = $request->only([
        'nonota_beli', 'tgl_beli', 'total_beli', 'id_distributor', 'id_users'
        ]);
        pembelian::create($array);
        return redirect()->route('detail_pembelian.create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    { 
 //Menampilkan Form Edit
    $pembelian = pembelian::find($id);
    if (!$pembelian) return redirect()->route('pembelian.index') 
    ->with('error_message', 'Pembelian dengan id = '.$id.' tidak ditemukan');
    return view('pembelian.edit', [ 
    'pembelian' => $pembelian,
    'distributor' => distributor::all(),
    'users' => User::all()
    ]);
} 

    public function update(Request $request, $id)
        { 
        $request->validate([
        'nonota_beli' => 'required',
        'tgl_beli' => 'required',
        'total_beli' => 'required',
        'id_distributor' => 'required',
        'id_users' => 'required',
        ]);
        $pembelian = pembelian::find($id);
        $pembelian->nonota_beli = $request->nonota_beli;
        $pembelian->tgl_beli = $request->tgl_beli;
        $pembelian->total_beli = $request->total_beli;
        $pembelian->id_distributor = $request->id_distributor;
        $pembelian->id_users = $request->id_users;
        $pembelian->save();
        return redirect()->route('pembelian.index') 
        ->with('success_message', 'Berhasil Mengubah Pembelian');
    } 

    public function destroy($id)
    {
        $pembelian = pembelian::find($id);

        if ($pembelian) $pembelian->delete();
        return redirect()->route('pembelian.index')->with('success_message', 'Berhasil Menghapus Pembelian');
    }
}
