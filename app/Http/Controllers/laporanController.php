<?php

namespace App\Http\Controllers;
use App\Models\laporan;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF as PDF;


// set_time_limit(120);

class laporanController extends Controller
{
    public function index()
    {
        $laporan = laporan::all();
        return view('laporan.index', [
            'laporan' => $laporan
        ]);
    }

    public function downloadpdf(){
        $laporan = laporan::all();
        $pdf = app()->make(PDF::class);
        $pdf->loadView('laporan.cetak', [
            'laporan' => $laporan,
            'users' => User::all()
        ]);
        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('laporan.cetak',[
        //     'laporan' => $laporan
        // ]);
        return $pdf->download('laporanUser.pdf');
    }
}
