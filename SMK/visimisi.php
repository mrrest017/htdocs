<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/logosmk.png" type="image/png">
	<title>SMK Darus Salam</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="admin/css/style.css">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left">
						<a href="tel:+6285231821348">
							<span class="lnr lnr-phone"></span>
							<span class="text">
								<span class="text">(+62)8523 1821 348</span>
							</span>
						</a>
						<a href="mailto:darussalamsmk11@yahoo.com">
							<span class="lnr lnr-envelope"></span>
							<span class="text">
								<span class="text">darussalamsmk11@yahoo.com</span>
							</span>
						</a>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<a href="login.php" class="text-uppercase">Masuk</a>
					</div>
				</div>
			</div>
		</div>

		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Cari">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Tutup"></span>
					</form>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo2.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item active submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Profil</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="sambutan.php">Sambutan</a></li>
									<li class="nav-item"><a class="nav-link" href="sejarah.php">Sejarah</a></li>
									<li class="nav-item"><a class="nav-link" href="profilsingkat.php">Profil Singkat</a></li>
									<li class="nav-item"><a class="nav-link" href="visimisi.php">Visi dan Misi</a></li>
									<li class="nav-item"><a class="nav-link" href="struktur.php">Struktur</a></li>
								</ul>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Data</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="siswa.php">Siswa</a></li>
									<li class="nav-item"><a class="nav-link" href="guru.php">Guru</a></li>
									<li class="nav-item"><a class="nav-link" href="karyawan.php">Karyawan</a></li>
								</ul>
							</li>
							</li><li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Jurusan</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="multimedia.php">Multimedia</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Ekstrakulikuler</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="pencak_silat.php">Pencak Silat</a></li>
									<li class="nav-item"><a class="nav-link" href="pramuka.php">Pramuka</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Galeri</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="photo.php">Foto</a></li>
									<li class="nav-item"><a class="nav-link" href="video.php">Video</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Info</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="pengumuman.php">Pengumuman</a></li>
									<li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="aka.php">Prestasi</a></li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="banner_area3">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Visi dan Misi<br>SMK Darus Salam</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->
	
	<!--================ End Feature Area =================-->

	<!--================ Start Department Area =================-->
	
	<!--================ End Department Area =================-->

	<!--================ Start Popular Courses Area =================-->
	<br>
	<br>
    <div class="whole-wrap">
		<div class="container">
						<h3 class="mb-20 title_color">Visi </h3>
<ol>
	<li>Mendidik  siswa yang beriman,bertaqwa kepada Allah SWT dan berakhlaquk karimah.<br></li>
	<li>Menghasilkan siswa yang cerdas,cermat,kreatif dan berkepribadian teguh.<br></li>
	<li>Menghasilkan siswa yang terampil,mandiriuntuk berhasil mengatasi kelaparan dan membebaskan diri dari kemiskinan.<br><br><br></li>
</ol>
									
                    </div>
		<div class="container">			
					<h3 class="mb-20 title_color">Misi </h3>
<ol>
	<li>Melaksanakan pendidikan dengan berdasarkan kurikulum SMK dari DEPDIKNAS RI dipadukan dengan muatan agama islam yang diperluas sehingga menghasilkan siswa yang beriman dan bertaqwa kepada Allah SWT. <br></li>
	<li>Menyelenggharakan pendidikan untuk meningkatkan kemampuan konstruktif,kompetitif,daya piker dan daya nalar positif siswa.<br></li>
	<li>Menjalin kerjasama yang baik antara pelaku pendidikan intern maupun ekstern.<br></li>
	<li>Meningkatkan kedisiplinan dengan melaksanakan peraturan-peraturan yang telah disepakati bersama.<br></li>
	<li>Menyiapkan siswa untuk dapat melanjutkan ke Perguruan Tinggi.<br></li>
	<li>Menjadikan Siswa/Siswi unggul dibidang Teknologi Informasi dan Komunikasi serta Siap Kerja. Berkualitas, Disiplin dan memiliki keimanan terhadap  tuhan yang Maha Esa</li>
</ol>
</div>
<br>
<br>
<br>
<br>
				<!-- single course -->
				
				
	<!--================ End Popular Courses Area =================-->

	<!--================ Start Fact Area =================-->
	
	<!--================ End Fact Area =================-->

	<!--================ Start Testimonial Area =================-->
	
	<!--================ End Testimonial Area =================-->

	<!--================ Start Registration Area =================-->
	
	<!--================ End Registration Area =================-->

	<!--================ Start Events Area =================-->
	
    <!--================Contact Area =================-->

	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Profil Sekolah</h4>
					<ul>
						<li><a href="sejarah.php">Sejarah</a></li>
						<li><a href="profilsingkat.php">Profil Singkat</a></li>
						<li><a href="visimisi.php">Visi dan Misi</a></li>
						<li><a href="struktur.php">Struktur</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Data Sekolah</h4>
					<ul>
						<li><a href="siswa.php">Siswa</a></li>
						<li><a href="guru.php">Guru</a></li>
						<li><a href="karyawan.php">Karyawan</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Jurusan</h4>
					<ul>
						<li><a href="multimedia.php">Multimedia</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Ekstrakurikuler</h4>
					<ul>
						<li><a href="pramuka.php">Pramuka</a></li>
						<li><a href="pencak_silat.php">Pencak Silat</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Info</h4>
					<ul>
						<li><a href="pengumuman.php">Pengumuman</a></li>
						<li><a href="berita.php">Berita</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Prestasi</h4>
					<ul>
						<li><a href="aka.php">Prestasi</a></li>
					</ul>
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<font size="3" color="#333333">&copy;2019 || SMK DARUS SALAM<br>All Rights Reserved<br>Powered by Kelompok 4</font>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/countdown.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>