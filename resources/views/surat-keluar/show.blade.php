
@extends('layouts.app')

@section('title', 'Detail Surat Keluar')

@section('content')
    <h1>Detail Surat Keluar</h1>

    <p>Nomor: {{ $surat->nomor_surat }}</p>
    <p>Tanggal: {{ $surat->tanggal }}</p>
    <p>Penerima: {{ $surat->penerima }}</p>
    <p>Perihal: {{ $surat->perihal }}</p>
    <p>Keterangan: {{ $surat->keterangan ?? '-' }}</p>

    <a href="{{ route('surat-keluar.index') }}">Kembali</a>
@endsection


{{-- @extends('layouts.appkeluar')
@section('title', 'halaman surat keluar show')
@section('content')
    
<body>
    <h1>Detail Surat Keluar</h1>
    @if ($surat)
    <p>
        <strong>Nomor Surat:</strong>
        {{ $surat->nomor_surat }}
        
    </p>
    <p>
        <strong>Tanggal:</strong>
        {{ $surat->tanggal }}
        
    </p>
    <p>
        <strong>Pengirim:</strong>
        {{ $surat->pengirim }}

    </p>
    <p>
        <strong>perihal:</strong>
        {{ $surat->perihal }}
        
    </p>
    @else
    <p>surat tidak ditemukan</p>
    @endif
    <a href="{{ route('surat-keluar.index') }}">kembali</a>
    @endsection --}}
