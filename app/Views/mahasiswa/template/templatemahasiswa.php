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
        <!-- memanggil tampilan menu2 mahasiswa -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-none d-lg-block"><img class="img-fluid img-profile mx-auto mb-2" src="assets/img/logofst.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('dashboard');?>">dashboard</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('suratakademik');?>">Surat Akademik</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger"  href="<?= base_url('cekinfo');?>">Cek Informasi Surat </a></li>
                </ul>
              
            </div>
            <footer class="resume-section text-center text-lg-start bg-transparent fixed-bottom">
            <!-- Copyright -->
                    <div class=" text-center p-3" >
                        <span>Copyright &copy; PPSI. Kelompok 3 <?= date('Y');?></span>
                    </div>
            </footer>
        </nav>
        
        <nav class="navbar sticky-top breadcrumbs ">
<!-- breadcrumbs -->
            <div class="justify-content-left">
			    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			    	<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Dashboard</a></li>
			    	<li class="active">Halaman Login</li>
			    </ol>
	        </div>
<!-- //breadcrumbs -->
            <div class="d-flex flex-row-reverse justify-content-end  ">
            <a class="btn btn-black" href="#" role="button"><i class="fas fa-sort-down"></i></a>
            </div>
        </nav>
       
        <section class="resume-section" id="">
            
                <div class="">
                    <?= $this->renderSection('content'); ?>
                </div>
        </section>


            <!-- Footer -->
            <footer class="resume-section text-center text-lg-start bg-transparent fixed-bottom">
            <!-- Copyright -->
                    <div class=" text-center p-3" >
                        <span>Copyright &copy; PPSI. Kelompok 3 <?= date('Y');?></span>
                    </div>
            </footer>
            <!-- End of Footer -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    </html>