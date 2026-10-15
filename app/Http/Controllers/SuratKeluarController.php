<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
     public function index() {
        $suratKeluar = [
            [
                'id' => 1,
                'nomor_surat' => '001/FTx/2026',
                'tanggal' => '08-1-2026',
                'pengirim' => 'Teknik',
                'perihal' => 'undangan rapat sikopat'
            ],
            [
                'id' => 2,
                'nomor_surat' => '002/FTx/2026',
                'tanggal' => '09-1-2026',
                'pengirim' => 'Informasi',
                'perihal' => 'undangan sukses sikopat'
            ],
            [
                'id' => 3,
                'nomor_surat' => '003/FTx/2026',
                'tanggal' => '10-1-2026',
                'pengirim' => 'elektro',
                'perihal' => 'undangan Akademik sikopat'
            ]
        ];
     return view('surat-keluar.index', compact('suratKeluar'));
    }
    public function show($id) {
     //return 'Detail Surat Masuk dengan ID'. $id ; 
     $suratkeluarDetail = [
        1=>[
            'id' => 1,
                'nomor_surat' => '001/FTx/2026',
                'tanggal' => '08-1-2026',
                'pengirim' => 'Teknik',
                'perihal' => 'undangan rapat'
        ],
        2=>[
            'id' => 2,
                'nomor_surat' => '002/FTx/2026',
                'tanggal' => '09-1-2026',
                'pengirim' => 'Informasi',
                'perihal' => 'undangan sukses'
        ],
        3=>[
             'id' => 3,
                'nomor_surat' => '003/FTx/2026',
                'tanggal' => '10-1-2026',
                'pengirim' => 'elektro',
                'perihal' => 'undangan Akademik'
        ]
     ]; 
     $surat = $suratkeluarDetail[$id] ?? null;
     return view('surat-keluar.show', compact('surat'));
    }
}
