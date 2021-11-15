@extends('layouts/main')

{{-- header --}}
@section('header')
@include('partitions/navbar')
@endsection

{{-- content --}}
@section('content')
    <h3> </h3>
    @foreach ($products as $product)
        <div>{{ $product->name }}</div>
        <div>{{ $product->supplier }}</div>
        <div>{{ $product->price }}</div>
        <div>{{ $product->description }}</div>
        <div><a href="/">Pesan Sekarang</a></div>
        <div><a href="/cart/store/{{ $product->id }}">Tambah ke Keranjang Belanja</a></div>
        <div><a href="/wishlist/store/{{ $product->id }}">Tambah ke Daftar Keinginan</a></div>
        <hr>
    @endforeach
@endsection

{{-- footer --}}
@section('footer')
@endsection