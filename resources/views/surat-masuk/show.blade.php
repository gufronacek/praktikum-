
@extends('layouts.app')

@section('title', 'Detail Surat Masuk')

@section('content')
    <h1>Detail Surat Masuk</h1>

    <p>Nomor: {{ $surat->nomor_surat }}</p>
    <p>Tanggal: {{ $surat->tanggal }}</p>
    <p>Pengirim: {{ $surat->pengirim }}</p>
    <p>Perihal: {{ $surat->perihal }}</p>
    <p>Keterangan: {{ $surat->keterangan ?? '-' }}</p>

    <a href="{{ route('surat-masuk.index') }}">Kembali</a>
@endsection




{{-- @extends('layouts.app')
@section('title', 'halaman surat masuk show')
@section('content')
    
<body>
    <h1>Detail Surat Masuk</h1>
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
        <strong>Perihal:</strong>
        {{ $surat->perihal }}
        
    </p>
    @else
    <p>surat tidak ditemukan</p>
    @endif
    <a href="{{ route('surat-masuk.index') }}">kembali</a>
    @endsection --}}
