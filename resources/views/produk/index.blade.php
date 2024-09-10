@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
    <div class="hero">
        <h1>Selamat Datang</h1>
        <p>Temukan produk terbaik untuk kebutuhan Anda</p>
    </div>

<h1>Daftar Produk</h1>
<div class="product-list">
    @foreach($produk as $pro)
    <div class="product-item">
        <img src="{{ $pro->gambar }}" alt="{{ $pro->nama }}">
        <h2>{{ $pro->name }}</h2>
        <p>{{ Str::limit($pro->description, 100) }}</p>
        <a href="{{ route('produk.show', $pro->id) }}">Lihat Detail</a>
    </div>
    @endforeach
</div>
@endsection