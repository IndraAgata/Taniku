@extends('layouts/main')

{{-- header --}}
@section('header')
    @include('partitions/navbar')
@endsection

{{-- content --}}
@section('content')
    <div class="content">
        <form action="/product/store" method="post" id="product-insertion-form">
            @csrf
            <h3>Input data produk</h3>
            <table>
                <tr>
                    <td><label for="name">Nama</label></td>
                    <td><input type="text" name="name" id="name" required></td>
                    @error('name')
                    <td class="error-message">{{ $message }}</td>
                    @enderror
                </tr>
                <tr>
                    <td><label for="description">Deskripsi</label></td>
                    <td><textarea name="description" id="description" cols="25" rows="4" form="product-insertion-form" required></textarea></td>
                    @error('description')
                    <td class="error-message">{{ $message }}</td>
                    @enderror
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="price" id="price" required></td>
                    @error('price')
                    <td class="error-message">{{ $message }}</td>
                    @enderror
                </tr>
                <input type="hidden" name="supplier" value="{{ auth()->user()->username }}">
            </table>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
@endsection