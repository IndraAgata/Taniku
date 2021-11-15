@extends('layouts/main')

{{-- header --}}
@section('header')
@include('partitions/navbar')
@endsection

{{-- content --}}
@section('content')
    <h3>Chekout</h3>
    <hr>
    <h3>Detail Penerima</h3>
    <div>{{ $user->fullname }}</div>
    <div>{{ $user->email }}</div>
    <div>{{ $user->phone_number }}</div>
    <div>{{ $user->kecamatan . ', ' . $user->kabupaten . ', ' . $user->provinsi }}</div>
    <div>{{ $user->postal_code }}</div>
    <hr>

    <h3>Detail Barang</h3>
    @if (isset($product))
        <div>{{ $product->name }}</div>
        <div>{{ $product->supplier }}</div>
        <div>{{ $product->price }}</div>
        <hr>
    @else
        @foreach ($products as $product)
            <div>{{ $product->name }}</div>
            <div>{{ $product->supplier }}</div>
            <div>{{ $product->price }}</div>
            <hr>
        @endforeach
    @endif
    
    <h3>Ringkasan Belanja</h3>
@endsection

{{-- footer --}}
@section('footer')
    <h3>Footer</h3>
@endsection