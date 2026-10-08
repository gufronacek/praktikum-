<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index() {
        $suratMasuk = [
            [
                'id' => 1,
                'nomor_surat' => '001/FTx/2026',
                'tanggal' => '08-1-2026',
                'pengirim' => 'Teknik',
                'perihal' => 'undangan rapat'
            ],
            [
                'id' => 2,
                'nomor_surat' => '002/FTx/2026',
                'tanggal' => '09-1-2026',
                'pengirim' => 'Informasi',
                'perihal' => 'undangan sukses'
            ],
            [
                'id' => 3,
                'nomor_surat' => '003/FTx/2026',
                'tanggal' => '10-1-2026',
                'pengirim' => 'elektro',
                'perihal' => 'undangan Akademik'
            ]
        ];
     return view('surat-masuk.index', compact('suratMasuk'));
    }
    public function show($id) {
     return 'Detail Surat Masuk dengan ID'. $id ;  
    }
}
