<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
        <link href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css" rel="stylesheet" >
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" >
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/home.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>

    <div class="container">
        @yield('header')
    </div>

    <div class="container">
        @yield('content')
    </div>   

    <div class="container">
        @yield('footer')
            <!-- Footer -->
            <footer
                    class="text-center text-lg-start text-white"
                    style="background-color: rgba(7, 99, 53, 0.733)"
            >
                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mt-3">Taniku</h6>
                        <hr
                            class="mb-2 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                        <p align="justify">
                            Taniku adalah aplikasi berbasis web yang dibuat dengan tujaun untuk mempertemukan petani dengan pembeli secara langsung, sehingga menghilangkan peran dari tengkulak dalam industri pertanian.
                        </p>
                        </div>
                        <!-- Grid column -->
                       
            
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mt-3">Contact</h6>
                        <hr
                            class="mb-2 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                        <p><i class="fas fa-home mr-3"></i> Badung, Bali, Indonesia</p>
                        <p><i class="fas fa-envelope mr-3"></i> taniku@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +62 897 3612 7893</p>
                        <p><i class="fas fa-print mr-3"></i> +62 987 2637 1273</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->
        
            <!-- Copyright -->
            <div
                class="text-center p-3"
                style="background-color: rgba(0, 0, 0, 0.2)"
                >
                © 2020 Copyright:
                <a class="text-white" href="/"
                >Taniku</a
                >
            </div>
            <!-- Copyright -->
            </footer>
            <!-- Footer -->
        
        </div>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>