<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $pesananpelangan= DB::select("SELECT pelanggann.nama_pelangan, COUNT(*) as jumlah_pesanan FROM pesanann
        JOIN pelangann ON pesanan.pelangan_id = pelangann.id GROUP BY pelangann.nama_pelangan;");
        return view('dashboard')->with('pesananpelangan',$pesananpelangan);
    }


       


    
}
