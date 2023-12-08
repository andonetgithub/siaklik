<?php 

session_start();

 ?>
<!DOCTYPE HTML>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets/images/logo Klinik.ico">
    
    <!-- Desc page -->
    <title>SIKK</title>
    <meta name="description" content="Website SIAKLIK">
    <meta name="keywords" content="klinik, bpjs, kesehatan" />
    <!-- <link rel="canonical" href="http://example.com/" /> -->

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/vanillatop.min.css">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
  <!--   <script defer="" src="fontawesome/js/all.js"></script>
 -->

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <!-- PAGE WRAPPER -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            
            <div class="sidebar-header">
                <div class="close-sidebar">
                    <button type="button" id="sidebarCollapse2" class="button-times">
                        <i class="fas fa-times"></i>
                        <span></span>
                    </button>
                </div>
                <ul class="custom-logo">
                    <li class="custom-logo Klinik-child">
                        <img class="logo-upn" src="assets/images/logo Klinik.png" alt="logo-upn">
                    </li>
                    <li class="custom-logo Klinik-child">
                        <a class="logo Klinik-text custom-text-head" href="index.php">SIKK<br><span class="span-logo Klinik"
                        style="color:white;">SISTEM INFORMASI KLINIK KECANTIKAN</span></a>
                    </li>
                </ul>
            </div>
            <ul class="list-unstyled components custom-menu-bar">
                <!-- <p class="active"><i class="fas fa-home"></i>Dummy Heading</p> -->
                <li class="custom-menu-sidebar active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-tasks"></i>Beranda Menu</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <?php
                        
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?> 
                        <!-- show HTML logout button -->
                        <li>
                        <a href="akses/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>
                        <?php else: ?>
                        <!-- show HTML login button --> 
                        
                        <li>
                            <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-sign-in-alt"></i>Login Akun</a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="poli/antrian.php"><i class="fas fa-user-friends"></i>Jadwal</a>
                        </li>
                        
                            
                               
                                   
                                    
                            
                            
                </li>
                <li class="custom-menu-sidebar">
                    
                           
                
                <li class="custom-menu-sidebar">
                    <a href="#pageContact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-address-book"></i>Contact</a>
                    <ul class="collapse list-unstyled" id="pageContact">
                        <li>
                            <a href="#"><i class="fas fa-phone-alt"></i>Contact : 0823-4576-4932</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-envelope"></i>E-mail : klinik@sikk.ac.id</a>
                        </li>
                    </ul>
                </li>
                <li class="custom-menu-sidebar">
                    <a href="#pageDokter" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-stethoscope"></i>Dokter</a>
                    <ul class="collapse list-unstyled" id="pageDokter">
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>dr. GRACE SKIN CARE</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>Drg.MESO SPA </a>
                        </li>
                    </ul>
                </li>
                <li class="custom-menu-sidebar">
                    <a href="#pagePerawat" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-briefcase-medical"></i>Perawat</a>
                    <ul class="collapse list-unstyled" id="pagePerawat">
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>MOH TOYYIB,S.Kep</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-user-md"></i>MUFARIDA,Amd.Kep</a>
                        </li>
                    </ul>
                </li>
                <li class="custom-menu-sidebar">
                    <a href="#pageMedia" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-photo-video"></i>Media Galeri</a>
                    <ul class="collapse list-unstyled" id="pageMedia">
                        <li>
                            <a href="poli/galeri.php?#galery-foto" target="_blank"><i class="fas fa-image"></i>Album Foto</a>
                        </li>
                        <li>
                            <a href="poli/galeri.php?#galery-video" target="_blank"><i class="fas fa-film"></i>Album Video</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End of Sidebar -->

        <!-- Page Main Body Page Content  -->
        <div id="content">
            <!-- navbar top -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn custom-btn-color">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto py-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link custom-text-light" href="index.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown show">
                                <a class="nav-link custom-text-light" href="#" id="PoliDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Klinik <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right custom-icons" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item custom-dropdown" href="menu_klinik.php"><i class="fas fa-chalkboard-teacher"></i>Menu Admin</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="poli/antrian.php" target="_blank"><i class="fas fa-user-friends"></i>Daftar Antrian</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="poli/poliumum.php" target="_blank"><i class="fas fa-clinic-medical"></i>Poli Umum</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="poli/poli_gigi.php" target="_blank"><i class="fas fa-tooth"></i>Poli Gigi</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="poli/alurpoli.php" target="_blank"><i class="fas fa-procedures"></i>Informasi & Pelayanan Pasien</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="grafik/grafik.php" target="_blank"><i class="fas fa-chart-bar"></i>Data Grafik</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item custom-dropdown" href="index.php?#about" target="_blank"><i class="fas fa-info-circle"></i>Tentang Klinik</a>
                                </div>
                            </li>
                            
                        <?php
                        
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?> 
                        <!-- show HTML logout button -->
                        <li class="nav-item">
                        <a class="nav-link custom-text-light" href="akses/logout.php"><i class="fas fa-sign-out-alt"></i>Keluar</a>
                        </li>
                        <?php else: ?>
                        <!-- show HTML login button --> 
                        
                        
                            <li class="nav-item">
                                    <a class="nav-link custom-text-light" href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Masuk</a>
                            </li>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <!--Modal: Login / Register Form-->
                <?php 
                    if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){
                    echo "<script>alert('Captcha Salah');</script>";
                    }
                    else if($_GET['pesan'] == "salah"){
                    echo "<script>alert('Username/Password salah');</script>";
                    }
                    else if($_GET['pesan'] == "belumlogin"){
                    echo "<script>alert('Mohon Login terlebih dahulu');</script>";
                    }
                    else if($_GET['pesan'] == "error"){
                    echo "<script>alert('Access Denied');</script>";
                    }
                    }
                    ?>
                <!-- Large modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="custom-modal-wrapper">
                                <div class="modal-header bg-warning d-flex justify-content-center">
                                    <div class="col-1"></div>
                                    <h5 class="col-10 modal-title text-center mx-auto" id="exampleModalLabel">Pilih Peran Pengguna</h5>
                                    <button type="button" class="close mx-auto" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <!-- row requires "row-divided" class -->
                                <div class="modal-body row row-divided">
                                    <div class="col-md-6 px-4 column-one">
                                        <div class="custom-modal-header patient">
                                            <i class="fas fa-user-alt"></i>
                                            <h5>Pasien Klinik</h5>
                                        </div>
                                        <div class="patient-form">
                                            <form class="input-data" action="akses/cek_login.php" method="post" name="patient-form">
                                                <div class="form-group">
                                                    <label for="text">Email address</label>
                                                    <input type="email" class="form-control" id="Patient-email" aria-describedby="patient-emailHelp" placeholder="Enter email" required="" name="patient-email">
                                                    <small id="patient-emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="Patient-password" placeholder="Password" required="" name="patient-password" autocomplete="on">
                                                </div>
                                                <div class="form-group">
                                                    
                                                </div>
                                                <div class="form-group">
                                                
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="Patient-check" value="ingat-patient">
                                                    <label class="form-check-label" for="Patient-check">ingat saya</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="patient-submit" value="patient-submit">Masuk</button>
                                            </form>
                                        </div>
                                    </div>
                                    
                                <!-- register link -->
                                <div class="modal-footer pb-2">
                                    <div class="col-md-12 text-center p-2">
                                        <p>Belum punya akun pasien ? Daftar akun pasien baru sekarang !</p>
                                        <a type="button" class="btn btn-success" target="_blank" href="akses/register.php">Daftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal: Login / Register Form-->
            </nav>
            <!-- end of navbar top -->

            <!-- body -->
            <main>
                <!-- slide photo -->
                <section class="slide-photo">
                    <div class="custom-header header-wrapper">
                        <h4><img height="60" width="60" src="assets/images/logo klinik.png"> 
                        &nbsp;<span><strong>SISTEM INFORMASI KLINIK KECANTIKAN</strong></span></h4>
                    </div>
                    <hr class="solid">
                    <div class="bd-example row">
                        <div class="col-1"></div>
                        <div id="carouselExampleCaptions" class="col-10 carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="4000">
                                    <img height="380" src="assets/images/slide/1.jpg" class="d-block w-100" alt="Profil Tempat Klinik">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Profil Tempat Klinik</h5>
                                        
                                </div>
                                <div class="carousel-item" data-interval="4000">
                                    <img height="380" src="assets/images/slide/1.jpg" class="d-block w-100" alt="Profil Produk Klinik ">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Profil Produk Klinik</h5>
                                       
                                </div>
                                <div class="carousel-item" data-interval="4000">
                                    <img height="380" src="assets/images/slide/3.jpg" class="d-block w-100" alt="Ruang Perawatan">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Ruang Perawatan</h5>
                                       
                                </div>
                                <div class="carousel-item" data-interval="4000">
                                    <img height="380" src="assets/images/slide/4.jpg" class="d-block w-100" alt="Ruang Tunggu">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5></h5>Ruang Tunggu
                                       
                                        
                                
                    
                </section>
                <!-- end of slide photo -->

                <hr class="solid">

                <!-- about siaklik -->
                <section class="about" id="about">
                    <div class="custom-header about-header">
                        <h4><i class="fas fa-info-circle"></i>Tentang Sistem Informasi Klinik Kecantikan</h4>
                    </div>
                    <div class="about-wrapper">
                        <div class="date-calendar">
                            <div class="calendar">
                                <p id="namaBulan"></p>
                                <p id="namaHari"></p>
                                <p id="tanggal"></p>
                                <p id="tahun"></p>
                            </div>
                            <script type="text/javascript" src="assets/js/date_calender.js"></script>
                        </div>
                        <div class="text-justify about-text">
                            <h5><b>Tentang Sistem Informasi Klinik Kecantikan</b></h5>
                            <hr class="solid">
                            <p>Sistem Informasi Klinik Kecantikan atau SAIKK merupakan Sistem Informasi Klinik Kecantikan adalah suatu platform atau sistem yang dirancang khusus untuk membantu pengelolaan dan operasional sehari-hari dari klinik kecantikan. Sistem ini bertujuan untuk meningkatkan efisiensi, akurasi, dan kualitas layanan di dalam klinik kecantikan.Berikut adalah beberapa komponen utama dalam Sistem Informasi Klinik Kecantikan: :</p>
                            <ol class="about-list">
                                <li>Manajemen Pasien:

Pendaftaran dan Identifikasi Pasien: Melibatkan pembuatan rekam medis elektronik untuk setiap pasien, termasuk informasi pribadi, riwayat kesehatan, dan informasi kontak.</li>
                                <li>Manajemen Layanan:

Inventaris Produk dan Peralatan: Melacak stok produk kecantikan dan peralatan yang digunakan dalam klinik. Hal ini membantu dalam manajemen persediaan dan pemesanan ulang produk.</li>
                            </ol> 
                        </div>

                    </div>
                </section>
                <!-- end of about siaklik -->

                <hr class="solid">

                <!-- Atrikel -->
                <section class="article">
                    <div class="custom-header">
                        <h4><i class="fas fa-rss-square"></i>Artikel Sistem Informasi klinik Kecantikan</h4>
                    </div>
                    <div class="container my-4">
                        <p><strong>Kumpulan Artikel <a href="index.php"
                            target="_blank">Sikk</a>.
                        </p>
                    </div>
                    <div class="artikel-slider-wrapper">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="span-title py-3">
                                    <p class="font-weight-light">geser untuk memilih artikel</p>
                                </div>
                                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div id="carouselExampleIndicators2" class="carousel slide carousel-fade" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="5000">
                                            <div class="card-deck">

                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="assets/images/Sulam alis.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Sulam Alis</h4>
                                                            <p class="card-text">Sulam alis, atau yang juga dikenal dengan sebutan microblading, adalah suatu metode seni tato semi-permanen yang digunakan untuk meningkatkan atau menyempurnakan bentuk dan ketebalan alis seseorang.</p>
                                                            <a href="https://drive.google.com/file/d/1IUDjC2UDmxYaZn8Jzari8G7tagSactuT/preview"></a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="assets/images/Suntik Pemutih.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Suntik Pemutih</h4>
                                                            <p class="card-text">Suntik pemutih atau disebut juga suntik pemutih kulit adalah suatu prosedur kosmetik di mana zat pemutih atau zat penghambat produksi pigmen kulit (melanin) disuntikkan ke dalam tubuh untuk mencapai efek pemutihan kulit.</p>
                                                            <a href="https://drive.google.com/file/d/13aN5HJiE0dy-oL_VX7scSd5IIbAyJfL9/preview"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="assets/images/Filer Bibir.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Filer Bibir</h4>
                                                            <p class="card-text">Filer bibir atau pengisi bibir adalah suatu prosedur kosmetik yang dilakukan untuk meningkatkan volume, bentuk, atau definisi bibir. Prosedur ini biasanya melibatkan penggunaan bahan pengisi seperti asam hialuronat, kolagen, atau bahan pengisi lainnya. </p>
                                                            <a href="https://drive.google.com/file/d/1L_rULKmC9Lg8PCmSWz2VxJ3XpytEDL4o/preview"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-interval="5000">
                                            <div class="card-group">

                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="assets/images/Filer Wajah.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Filer Wajah </h4>
                                                            <p class="card-text">Dalam konteks perawatan kecantikan, istilah "filer wajah" dapat merujuk pada bahan pengisi yang disuntikkan ke dalam kulit untuk mengisi kerutan, meratakan kontur wajah, atau memberikan volume. Bahan pengisi yang umum digunakan termasuk asam hialuronat.</p>
                                                            <a href="https://drive.google.com/file/d/1ugoq8IDg2wiIEDX3LCMjDK7863xCdYA0/preview"></a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="assets/images/Laser.jpg">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Laser</h4>
                                                            <p class="card-text">Dalam konteks kecantikan, laser digunakan sebagai salah satu teknologi perawatan yang bersifat non-invasif atau semi-invasif untuk mengatasi berbagai masalah kulit dan kecantikan.</p>
                                                            <a href="https://drive.google.com/file/d/1PpQgSf7SEhG4xo_-KhbGr_RwsXzTzJQr/preview"></a>
                                                        </div>
                                                    </div>
                                                </div>
                </section>
                <!-- END of Artikel -->
                <hr class="solid">
            </main>
            <!-- End of Main -->

            <!-- Footer -->
            <footer class="page-footer font-small footer-background pt-4 text-light">
                <!-- Footer Links -->
                <div class="container-fluid text-center text-md-left">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3">
                            <!-- Content -->
                            <h5 class=""><i class="footer-icons fas fa-map-marker-alt"></i>Alamat Klinik Sikk</h5>
                            <p class="text-light">Jl.Jamin Ginting Padang Bulan Medan No 234</p>
                            <p class="text-light custom-buka-hover">Buka dengan <a href="https://www.google.com/maps?ll=-7.333339,112.788588&z=16&t=m&hl=en&gl=ID&mapclient=embed&cid=12854831982186720929" target="_blank" class="custom-buka-hover"><i class="fas fa-map-marked-alt"></i>&nbsp;&nbsp;Google Map</a></p>
                            
                        </div>
                        <!-- Grid column -->
                        <hr class="clearfix w-100 d-md-none pb-3">
                        <!-- Grid column -->
                       
                        <!-- End Grid column -->
                        <!-- End Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">
                            <!-- Links -->
                            <h5 class=" "><i class="footer-icons fas fa-address-book"></i>Kontak</h5>
                            <ul class="list-unstyled font-weight-normal">
                                <li>
                                    <a>Telephone : 0823-4567-4932</a>
                                </li>
                                <li>
                                    <a>klinik@sikk.ac.id</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Grid column -->
                    </div>
                    <!-- End Grid row -->
                </div>
                <!-- Footer Links -->
                <!-- Copyright -->
                <div class="footer-copyright bg-dark text-light text-center py-3">Created at 2021
                </div>
                <!-- End Copyright -->
            </footer>
            <!-- END of Footer -->

        </div>
        <!-- End of Page Main Body Page Content  -->

    </div>
    <!-- PAGE WRAPPER -->

    <!-- SCRIPT LIST -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
            $('#sidebarCollapse2').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
    <!-- start vanillatop plugin -->
    </div><a href="#!" class="vanillatop"><i class="fas fa-angle-up"></i></a>
    <script src="dist/vanillatop.min.js"></script>
    <!-- end vanillatop plugin -->

</body>
</html>