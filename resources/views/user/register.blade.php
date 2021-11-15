@extends('layouts/main');

{{-- header --}}

@section('header')
@include('partitions/navbar')
@endsection

@section('content')
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5" style="background-color: rgb(134, 223, 122)">
            <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">User Login</h5>
                    <form action="/user/login" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{ old('username') }}" required autofocus>
                            <label for="username">Username</label>
                            @error('username')
                            <td class="error-message">{{ $message }}</td>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                            @error('password')
                            <td class="error-message">{{ $message }}</td>
                            @enderror
                        </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">submit</button>
                        </div>
                        </div>
                        <p>Tidak Memiliku Akun?</p>
                        <div>Silahkan <a href="/user/register">Register</a></div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

    <form action="/user/register" method="post">
        @csrf
        <h3>User registration</h3>
        <table>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" id="email" required autofocus value="{{ old('email') }}"></td>
                @error('email')
                <td class="error-message">{{ $message }}</td>
                @enderror
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password" required></td>
                @error('password')
                <td class="error-message">{{ $message }}</td>
                @enderror
            </tr>
            <tr>
                <td><label for="confirm">Konfirmasi password</label></td>
                <td><input type="password" name="confirm" id="confirm" required></td>
                @error('confirm')
                <td class="error-message">{{ $message }}</td>
                @enderror
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id="username" required value="{{ old('username') }}"></td>
                @error('username')
                <td class="error-message">{{ $message }}</td>
                @enderror
            </tr>
            <tr>
                <td><label for="fullname">Nama Lengkap</label></td>
                <td><input type="text" name="fullname" id="fullname" required value="{{ old('fullname') }}"></td>
                @error('fullname')
                <td class="error-message">{{ $message }}</td>
                @enderror
            </tr>
            <tr>
                <td><label for="phone_number">Nomor Telepon</label></td>
                <td><input type="text" name="phone_number" id="phone_number" required value="{{ old('phone_number') }}"></td>
                @error('phone_number')
                <td class="error-message">{{ $message }}</td>
                @enderror
            </tr>
            <tr>
                <td><label for="provinsi">Provinsi</label></td>
                <td><input type="text" name="provinsi" id="provinsi" required value="{{ old('provinsi') }}"></td>
                @error('provinsi')
                <td class="error-message">{{ $message }}</td>
                @enderror
            </tr>
            <tr>
                <td><label for="kabupaten">Kabupaten</label></td>
                <td><input type="text" name="kabupaten" id="kabupaten" required value="{{ old('kabupaten') }}"></td>
                @error('kabupaten')
                <td class="error-message">{{ $message }}</td>
                @enderror
            </tr>
            <tr>
                <td><label for="kecamatan">Kecamatan</label></td>
                <td><input type="text" name="kecamatan" id="kecamatan" required value="{{ old('kecamatan') }}"></td>
                @error('kecamatan')
                <td class="error-message">{{ $message }}</td>
                @enderror
            </tr>
            <tr>
                <td><label for="postal_code">Kode Pos</label></td>
                <td><input type="text" name="postal_code" id="postal_code" required value="{{ old('postal_code') }}"></td>
                @error('postal_code')
                <td class="error-message">{{ $message }}</td>
                @enderror
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form>
    <div>or <a href="/user/login">Login</a></div>
@endsection