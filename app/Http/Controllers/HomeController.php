<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembelian;
use App\Models\penjualan;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function laporanadmin(Request $request)
    {
        if ($request->start) {
            $data = penjualan::where('tgl_jual', [$request->start])->get();
        } else {
            $data = penjualan::get();
        }
        return view('laporanadmin', [
            'data' => $data,
        ]);
    }

    public function laporanadmin1(Request $request)
    {
        if ($request->start) {
            $data = pembelian::where('tgl_beli', [$request->start])->get();
        } else {
            $data = pembelian::get();
        }
        return view('laporanadmin1', [
            'data' => $data,
        ]);
    }
}
