@extends('layouts/login')


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
              <h5 class="card-title text-center mb-5 fw-light fs-5" >User Login</h5>
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
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" style="background-color: rgb(32, 107, 23)">submit</button>
                </div>
                </div>
                <p>Tidak Memiliku Akun?</p>
                <p>Silahkan Register</p>
                <a href="/user/register" class="btn btn-outline-light" style="background-color: rgb(32, 107, 23)">Register</a>  
            </div>
              </form>
            </div>
          </div>
        </div>
        </div>
    </div>
@endsection