@extends('adminlte::page')
@section('title', 'Apotek | Dashboard Laporan')
@section('content_header')
    <h1 class="m-0 text-light">Laporan</h1>
@stop
@section('content')
<link rel="stylesheet" href="css/card.css">
<div class="ag-format-container">
    <div class="ag-courses_box">

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>
                <div class="ag-courses-item_title" onclick="printPage()">
                    <i class="fas fa-print">Print</i>
                </div>
                <div class="ag-courses-item_date-box">
                    Buat Laporan
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>
                <div class="ag-courses-item_title">
                    Stok Obat
                </div>

                <div class="ag-courses-item_date-box">

                    <span class="ag-courses-item_date">
                        <?php
                        $totalStok = DB::table('obat')->sum('stok');
                        echo "<p class='mb-0'>$totalStok</p>";
                        ?>
                    </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>
                <div class="ag-courses-item_title">
                    Total Penjualan
                </div>

                <div class="ag-courses-item_date-box">

                    <span class="ag-courses-item_date">
                        <?php
                        $totalPenjualan = DB::table('detail_penjualan')->sum('jumlah_jual');
                        echo "<p class='mb-0'>$totalPenjualan</p>";
                        ?>
                    </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>
                <div class="ag-courses-item_title">
                    Dana Masuk
                </div>

                <div class="ag-courses-item_date-box">

                    <span class="ag-courses-item_date">
                        <?php
                        $currentMonth = date('m');
                        $danaMasuk = DB::table('detail_penjualan')
                            ->whereMonth('created_at', $currentMonth)
                            ->sum('subtotal_jual');
                        echo "<p class='mb-0'>Rp. " . number_format($danaMasuk, 0, ',', '.') . "</p>";
                        ?>
                    </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>
                <div class="ag-courses-item_title">
                    Dana Keluar
                </div>

                <div class="ag-courses-item_date-box">

                    <span class="ag-courses-item_date">
                        <?php
                        $currentMonth = date('m');
                        $danaKeluar = DB::table('detail_pembelian')
                            ->whereMonth('created_at', $currentMonth)
                            ->sum('subtotal_beli');
                        echo "<p class='mb-0'>Rp. " . number_format($danaKeluar, 0, ',', '.') . "</p>";
                        ?>
                    </span>
                </div>
            </a>
        </div>

        <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>
                <div class="ag-courses-item_title">
                    Keuntungan
                </div>

                <div class="ag-courses-item_date-box">

                    <span class="ag-courses-item_date">
                        <?php
                        $currentMonth = date('m');
                        $totalPendapatan = DB::table('detail_penjualan')
                            ->whereMonth('created_at', $currentMonth)
                            ->sum('subtotal_jual');

                        $totalPengeluaran = DB::table('detail_pembelian')
                            ->whereMonth('created_at', $currentMonth)
                            ->sum('subtotal_beli');

                        $keuntungan = $totalPendapatan - $totalPengeluaran;
                        echo "<p class='mb-0'>Rp. " . number_format($keuntungan, 0, ',', '.') . "</p>";
                        ?>
                    </span>
                </div>
            </a>
        </div>
    </div>
    <script>
function printPage() {
    window.print();
}
</script>
@stop
