<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UTIA - Pelayanan Akademik FST</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url();?>/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">UTIA </span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile mx-auto mb-2" src="assets/img/logofst.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#masuk">Masuk</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#petunjuk">Petunjuk</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Hubungi Kami</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- Beranda-->
            <section class="resume-section" id="beranda">
                <div class="resume-section-content">
                    
                    <h1 class="mb-5">
                    <img class="mb-4 " src="assets/img/logofst.png" alt="" width="100" height="100">
                        UTIA
                    </h1>
                    
                    <p class="lead mb-5 justify-content-justify">UTIA atau Unit Teknologi Informasi Akademik adalah bagian dari akademik fakultas Sains dan Teknologi yang melayani kebutuhan mahasiswa dlam hal surat-menyurat. 
                        Layanan pada mahasiswa ini adalah salah satu bentuk fasilitas dari kampus untuk memberikan kemudahan dan kenyamanan bagi para mahasiswa. Dalam penelitian  sebelumnya menyatakan kenyamanan bagi para mahasiswa. 
                        Dalam penelitian sebelumnya menyatakan bahwa pemanfaatan TIK terutama penerapan penggunaan sistem informasi pada bidang pelayanan akademik di perguruan tinggi saat ini menjadi suatu kebutuhan wajib supaya dapat meningkatkan daya saing perguruan tinggi.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- LOGIN-->
            <section class="resume-section" id="masuk">
            <main class="form-signin">
              <form>
              <div class="d-flex flex-column flex-md-row justify-content-center  mb-1">
                <img class="mb-4  " src="assets/img/gambarlogin.png" alt="" width="72" height="57">
              </div>
              <div class="d-flex flex-column flex-md-row justify-content-center mb-3">
                
                <h2 class="mb-1 ">MASUK AKUN</h2>
              </div>
                <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                </div>
                <a class="btn w-100 btn btn-lg btn-primary" href="<?= route_to('dashboard')?>" role="button">Masuk</a></button>
                <hr>
                <div class="text-center">
                Belum Punya Akun?<a class="small" href="mailto:admin-fst@uinib.ac.id"> Daftar Disini</a>
                </div>

              </form>
            </main>
             
            </section>
            <hr class="m-0" />
            <!-- Petunjuk-->
            <section class="resume-section" id="petunjuk">
                <div class="resume-section-content">
                    <img src="assets/img/PosterPendaftaranUTIA.png" class="img-fluid" alt="image">
                </div>
            </section>
            <hr class="mb-1" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-1">Hubungi Kami <img src="https://img.icons8.com/stickers/100/000000/hand-down.png"/></h2>
                    <ul class="fa-ul mb-0">
                        <li>
                        <table border="0">
                            <tr>
                                <td><span class="fa-li "><i class="fas fa-map-marker-alt"></i></span>
                                                Alamat </td>
                                <TD>:</TD>
                                <td><p class="lead mb-0 justify-content-justify">59RF+77, Balai Gadang, Kec.Koto Tangah, Kota Padang, Sumatera Barat</p></td>
                            </tr>
                            <tr>
                                <td><span class="fa-li"><i class="fas fa-envelope-square"></i></span>
                            Email   </td>
                            <td>:</td>
                                <td> <a href="mailto:admin-fst@uinib.ac.id">admin-fst@uinib.ac.id</a></td>
                            </tr>
                        </table>
                             
                        </li>
                        <li>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.4203374627127!2d100.3731688!3d-0.8092764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4c5c4259bc2d1%3A0x98afea2a9ac9c16e!2sFakultas%20Sains%20dan%20Teknologi%20UIN%20Imam%20Bonjol!5e0!3m2!1sid!2sid!4v1665495621531!5m2!1sid!2sid" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="400" frameborder="0" style="border:0" allowfullscreen>
                            </iframe>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
