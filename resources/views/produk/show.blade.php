@extends('layouts.app')

@section('title', $produk->nama)

@section('content')
<h1>{{ $produk->nama }}</h1>
<img src="{{ $produk->gambar }}" alt="{{ $produk->nama }}">
<p>{{ $produk->deskripsi }}</p>
<a href="{{ route('home') }}">Kembali ke Daftar Produk</a>
@endsection
