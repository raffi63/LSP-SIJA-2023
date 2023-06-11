<?php

namespace App\Http\Controllers;
use App\Models\penjualan;
use App\Models\User;
use Illuminate\Http\Request;

class penjualanController extends Controller
{
    //
    //Menampilkan Semua Data Bidang Studi
        public function index()
    {
        $penjualan = penjualan::all();
        return view('penjualan.index', [
            'penjualan' => $penjualan
        ]);
    }

    public function create()
    {
        return view(
        'penjualan.create', [
        'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        //
        $request->validate([
        'nonota_jual' => 'required',
        'tgl_jual' => 'required',
        'total_jual' => 'required',
        'id_users' => 'required'
        ]);
        $array = $request->only([
        'nonota_jual', 'tgl_jual', 'total_jual','id_users'
        ]);
        penjualan::create($array);
        return redirect()->route('detail_penjualan.create');
    }

    public function edit($id)
    {
        $penjualan = penjualan::find($id);
        if (!$penjualan) return redirect()->route('penjualan.index')->with('error_message', 'Penjualan dengan id = '.$id.' tidak ditemukan');
        return view('penjualan.edit', [
        'penjualan' => $penjualan,
        'users' => User::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'nonota_jual' => 'required',
        'tgl_jual' => 'required',
        'total_jual' => 'required',
        'id_users' => 'required'
        ]);
        $penjualan = penjualan::find($id);
        $penjualan->nonota_jual = $request->nonota_jual;
        $penjualan->tgl_jual = $request->tgl_jual;
        $penjualan->total_jual = $request->total_jual;
        $penjualan->id_users = $request->id_users;
        $penjualan->save();
        return redirect()->route('penjualan.index')->with('success_message', 'Berhasil Mengubah Penjualan');
    }




    public function destroy($id)
    {
        $penjualan = penjualan::find($id);

        if ($penjualan) $penjualan->delete();
        return redirect()->route('penjualan.index')->with('success_message', 'Berhasil Menghapus Penjualan');
    }
}
