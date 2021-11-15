{{-- <h3>Header</h3> --}}

@auth
    <div><a href="/">Home</a></div>
    <div><a href="/product/show">Product</a></div>
    <div><a href="/catalog/{{ auth()->user()->username }}">Catalog</a></div>
    <div><a href="/cart/show">Shopping Cart</a></div>
    <div><a href="/wishlist/show">Wishlist</a></div>
    <form action="/user/logout" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
@else
    <header class="p-3 bg-success text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none text-lg-start fs-4 me-3" >Taniku
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
        </ul>
        <div class="text-end">
            <a href="/user/login" class="btn btn-outline-light mr-2 me-1">Login</a>
        </div>
      </div>
    </div>
  </header>
@endauth

