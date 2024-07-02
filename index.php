<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rumah Makan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .navbar {
            background-color: brown;
        }
        .nav-link {
            transition: background-color 0.3s;
        }
        #satu {
            background-color: brown;
            border-radius: 10px;
        }
        .nav-link:hover {
            background-color: #e0d5ce;
        }
        .content-card {
            margin-top: 20px;
            border: none;
        }
        .content-card img {
            height: 200px;
            object-fit: cover;
            border-radius: 8px 0 0 8px;
            width: 100%;
        }
        .card-body {
            padding: 1.5rem;
        }
        .footer {
            background-color: brown;
            padding: 10px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand navbar-dark">
        <div class="container-lg">
            <a class="navbar-brand" href="#"><i class="bi bi-shop"></i> Rumah Makan</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Username
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-bounding-box"></i> Profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-sliders2-vertical"></i> Pengaturan</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left"></i> Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header -->

    <div class="container-lg">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
                    <div class="container-fluid">   
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item" id="satu">
                                        <a class="nav-link link-light" aria-current="page" href="#"><i class="bi bi-house-fill"></i> Beranda </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="#"><i class="bi bi-person-hearts"></i> Admin </a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="#"><i class="bi bi-credit-card"></i> Kasir </a>
                                    </li>    
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="#"><i class="bi bi-person"></i> Pelayan </a>
                                    </li>    
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="#"><i class="bi bi-cup"></i> Dapur </a>
                                    </li>       
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End Sidebar -->

            <!-- Content -->
            <div class="col-lg-9 mt-2">
                <div class="content-card card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="nasi_goreng.jpg" class="img-fluid rounded-start" alt="Nasi Goreng">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Menu Nasi Goreng</h5>
                                <p class="card-text">Nasi goreng adalah makanan yang terbuat dari nasi yang digoreng dalam minyak atau margarin, seringkali ditambahkan telur dan dimakan dengan tambahan bahan lainnya seperti daging, ayam, dan bumbu rempah.</p>
                                <p class="card-text"><small class="text-muted">Harga: Rp. 20.000</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-card card mt-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="nasi_bebek.jpg" class="img-fluid rounded-start" alt="Nasi Bebek">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Menu Nasi Bebek</h5>
                                <p class="card-text">Nasi Bebek adalah makanan yang terbuat dari nasi yang disajikan dengan daging bebek, seringkali ditambahkan telur dan dimakan dengan tambahan bahan lainnya seperti timun, daun kemangi, dan bumbu khas.</p>
                                <p class="card-text"><small class="text-muted">Harga: Rp. 25.000</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>

        <div class="footer fixed-bottom text-center mb-2">
            copyright 2024 Siti Ainul Mardiah
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
