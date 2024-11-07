<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
    @extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <span style="font-family: 'Inria Sans', sans-serif; font-weight: bold; font-style: italic; font-size: 28px;">
                    <span style="color: #000000;">Ayo</span><span style="color: #54B2FF;">Belajar</span>
                </span>
            </a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Call Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class=" tulisan text-center my-5">
            <h1 style="font-size: 50px">Practice.<br>Academyc.<br><span style="color: #007bff;">Learn.</span></h1>
            <p>Kami membuka dunia melalui pelatihan bahasa, pertukaran budaya, program akademik, dan perjalanan pendidikan.
            </p>
        </div>

        <!-- Card Section -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 mb-3">
                    <div class="card" style="background-color: #e0e0e0; height: 300px; margin: 5px; padding: 20px; display: flex; flex-direction: column; background-image: url('{{ asset('image/student1.jpg') }}'); background-size: cover; background-position: center;">
                        <h4>Kursus bahasa Inggris untuk anak & remaja</h4>
                        <div class="mt-auto d-flex">
                            <button class="btn btn-light mx-2">3-6 Tahun</button>
                            <button class="btn btn-light mx-2">7-12 Tahun</button>
                            <button class="btn btn-light mx-2">13-16 Tahun</button>
                            <button class="btn btn-light mx-2">17-19 Tahun</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="background-color: #e0e0e0; height: 300px; margin: 5px; padding: 20px; display: flex; flex-direction: column; background-image: url('{{ asset('image/student3.jpg') }}'); background-size: cover; background-position: center;">
                        <h4>Kursus bahasa inggris <br>untuk dewasa</h4>
                        <div class="mt-auto d-flex">
                            <button class="btn btn-light mx-2">20-25 Tahun</button>
                            <button class="btn btn-light mx-2">25 Tahun++</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
            

            <!-- Baris kedua, tiga kartu kecil -->
            <div class="row justify-content-center mb-3">
                <div class="col-md-4">
                    <div class="card" style="margin: 5px; background-color: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); height: 400px; border-radius: 10px; overflow: hidden;">
                        <!-- Bagian gambar -->
                        <img src="{{ asset('image/student4.jpg') }}" alt="Belajar bahasa di luar negeri" class="card-img-top" style="height: 230px; object-fit: cover;">
                
                        <!-- Bagian konten -->
                        <div class="card-body">
                            <h5 class="card-title">Belajar bahasa di luar negeri</h5>
                            <p class="card-text">Pilih dari 10 bahasa di 50 destinasi di seluruh dunia</p>
                        </div>
                
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card" style="margin: 5px; background-color: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); height: 400px; border-radius: 10px; overflow: hidden;">
                        <!-- Bagian gambar -->
                        <img src="{{ asset('image/student5.jpg') }}" alt="Belajar bahasa di luar negeri" class="card-img-top" style="height: 230px; object-fit: cover;">
                
                        <!-- Bagian konten -->
                        <div class="card-body">
                            <h5 class="card-title">Pelajari Bahasa Inggris Lebih <br>Fluent</h5>
                            <p class="card-text">Dengan daftar Kelas kami akan memberikan pembelajaran bahasa inggris yang lebih fluent </p>
                        </div>
                
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card" style="margin: 5px; background-color: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); height: 400px; border-radius: 10px; overflow: hidden;">
                        <!-- Bagian gambar -->
                        <img src="{{ asset('image/student6.jpg') }}" alt="Belajar bahasa di luar negeri" class="card-img-top" style="height: 230px; object-fit: cover;">
                
                        <!-- Bagian konten -->
                        <div class="card-body">
                            <h5 class="card-title">Program Lanjutan, Untuk Memperdalam Bahasa Inggris</h5>
                            <p class="card-text">Dapatkan pembelajaran-pembelajaran yang lebih mendalam agar memperkuat bahasa inggris kalian</p>
                        </div>
                
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <!-- Baris ketiga, satu kartu kecil dan satu kartu lebar -->
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card" style="margin: 5px; background-color: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); height: 400px; border-radius: 10px; overflow: hidden;">
                        <!-- Bagian gambar -->
                        <img src="{{ asset('image/student7.jpg') }}" alt="Belajar bahasa di luar negeri" class="card-img-top" style="height: 230px; object-fit: cover;">
                
                        <!-- Bagian konten -->
                        <div class="card-body">
                            <h5 class="card-title">Program Bahasa untuk Perusahaan</h5>
                            <p class="card-text">Bersiap untuk menghadapi masa depan dunia kerja dengan program kami yang inovatif dan berfokus pada hasil.Dipercaya oleh ribuan perusahaan di seluruh dunia</p>
                        </div>
                
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card text-center" style="background-color: #e0e0e0; height: 400px;">
                        <div class=" card-tombol card-body d-flex flex-column justify-content-center" style="background-color: white">
                            <h4 class="card-title">Semua program</h4>
                            <div style="text-align: center; margin-top: 50px;">
                                <!-- Custom button with no Bootstrap -->
                                <button  href="#" class="custom-button">Pelajari lebih lanjut</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Age Group Section -->
        <div class="container text-center mt-5">
            <h2 class="tulisan2" >Pilihan kelompok umur</h2>
            <div class="row justify-content-center mt-4">
                <!-- Age Group Cards with updated size and text positioning, centered within container -->
                <div class="col-md-4 mb-3 d-flex justify-content-center">
                    <div class="card" style="background-color: #e0e0e0; width:384px; height: 220px; margin: 5px; padding: 20px; display: flex; flex-direction: column; background-image: url('{{ asset('image/student8.jpg') }}'); background-size: cover; background-position: center; ">
                        <div class="card-body" style="position: absolute; bottom: 10px; left: 10px; color:white;">
                            <p class="mb-0">Program</p>
                            <h5 class="mb-0">Umur 3-7</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 d-flex justify-content-center">
                    <div class="card" style="background-color: #e0e0e0; width:384px; height: 220px; margin: 5px; padding: 20px; display: flex; flex-direction: column; background-image: url('{{ asset('image/student9.jpg') }}'); background-size: cover; background-position: 20% 20%;">
                        <div class="card-body" style="position: absolute; bottom: 10px; left: 10px; color:white;">
                            <p class="mb-0">Program</p>
                            <h5 class="mb-0">Umur 7-12</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 d-flex justify-content-center">
                    <div class="card" style="background-color: #e0e0e0; width:384px; height: 220px; margin: 5px; padding: 20px; display: flex; flex-direction: column; background-image: url('{{ asset('image/student12.jpg') }}'); background-size: cover; background-position: 20% 60%;">
                        <div class="card-body" style="position: absolute; bottom: 10px; left: 10px; color:white;">
                            <p class="mb-0">Program</p>
                            <h5 class="mb-0">Umur 13-16</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 d-flex justify-content-center">
                    <div class="card" style="background-color: #e0e0e0; width:384px; height: 220px; margin: 5px; padding: 20px; display: flex; flex-direction: column; background-image: url('{{ asset('image/student10.jpg') }}'); background-size: cover; background-position: 20% 60%;">
                        <div class="card-body" style="position: absolute; bottom: 10px; left: 10px; color:white;">
                            <p class="mb-0">Program</p>
                            <h5 class="mb-0">Umur 17-19</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 d-flex justify-content-center">
                    <div class="card" style="background-color: #e0e0e0; width:384px; height: 220px; margin: 5px; padding: 20px; display: flex; flex-direction: column; background-image: url('{{ asset('image/student11.jpg') }}'); background-size: cover; background-position: center;">
                        <div class="card-body" style="position: absolute; bottom: 10px; left: 10px; color:white;">
                            <p class="mb-0">Program</p>
                            <h5 class="mb-0">Umur 20-25</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 d-flex justify-content-center">
                    <div class="card" style="background-color: #e0e0e0; width:384px; height: 220px; margin: 5px; padding: 20px; display: flex; flex-direction: column; background-image: url('{{ asset('image/student13.jpg') }}'); background-size: cover; background-position: center;">
                        <div class="card-body" style="position: absolute; bottom: 10px; left: 10px; color:white;">
                            <p class="mb-0">Program</p>
                            <h5 class="mb-0">Umur 25+</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- All Programs Card with Centered Text -->
            <div class="row justify-content-center mt-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card text-center"
                        style="background-color: #e0e0e0; width: 1231px; height: 203px; display: flex; align-items: center; justify-content: center; margin: 5px;">
                        <div>
                            <h4 class="mb-3">Semua Program</h4>
                            <a href="#" class="btn btn-outline-primary">Pelajari lebih lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Footer Section -->
   <footer class="footer">
    <div class="container-fluid">
        <div class="row text-center text-md-left">
            <!-- Logo Column -->
            <div class="col-md-2 footer-logo d-flex justify-content-center align-items-center">
                <img src="https://via.placeholder.com/100x50?text=Logo" alt="Logo">
            </div>

            <!-- First Column -->
            <div class="col-md-2">
                <h6 class="font-weight-bold">Program menurut usia</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Umur 3-7</a></li>
                    <li><a href="#">Umur 7-16</a></li>
                    <li><a href="#">Umur 16-18</a></li>
                    <li><a href="#">Umur 18-25</a></li>
                    <li><a href="#">Umur 25+</a></li>
                    <li><a href="#">Perusahaan dan instansi pemerintah</a></li>
                    <li><a href="#">Semua Umur</a></li>
                </ul>
            </div>

            <!-- Second Column -->
            <div class="col-md-2">
                <h6 class="font-weight-bold">Program Populer</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Pertukaran Pelajar</a></li>
                    <li><a href="#">Belajar Bahasa Inggris</a></li>
                    <li><a href="#">Homestay di Australia</a></li>
                    <li><a href="#">Homestay di Luar Negeri</a></li>
                    <li><a href="#">Kuliah di luar negeri</a></li>
                    <li><a href="#">Kursus Bahasa Inggris di Australia</a></li>
                    <li><a href="#">Semua program</a></li>
                </ul>
            </div>

            <!-- Third Column -->
            <div class="col-md-2">
                <h6 class="font-weight-bold">Pelajari lebih jauh</h6>
                <ul class="list-unstyled">
                    <li><a href="#">EF Blog</a></li>
                    <li><a href="#">EF English Proficiency Index (EF EPI)</a></li>
                    <li><a href="#">Sumber Belajar Bahasa Inggris</a></li>
                    <li><a href="#">Tes Kemampuan Bahasa Gratis</a></li>
                    <li><a href="#">EF Teacher Zone</a></li>
                    <li><a href="#">Panduan yang berguna</a></li>
                </ul>
            </div>

            <!-- Fourth Column -->
            <div class="col-md-2">
                <h6 class="font-weight-bold">Tentang EF Education First</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Tentang kami</a></li>
                    <li><a href="#">Kantor dan sekolah EF</a></li>
                    <li><a href="#">Semua program EF</a></li>
                    <li><a href="#">Karir di EF</a></li>
                </ul>
            </div>

            <!-- Fifth Column -->
            <div class="col-md-4">
                <h6 class="font-weight-bold">Kantor di Indonesia</h6>
                <address>
                    The Plaza Office Tower<br>
                    Level 22 #A2<br>
                    Jl. M.H. Thamrin Kav. 28 - 30<br>
                    Jakarta Pusat 10350<br>
                    +62 811-1370-3626
                </address>
                <a href="#">Petunjuk Arah</a>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom text-center text-md-left mt-3">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; Signum International AG 2024. Hak cipta dilindungi Undang-undang.</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#">Kebijakan privasi</a> | 
                    <a href="#">Syarat dan Ketentuan Program</a> | 
                    <a href="#">Kebijakan Cookie</a>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection
</body>
</html>