<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['user'])){ // Jika tidak ada session username berarti dia belum login
  header("location: ../index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
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
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
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
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown">
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
								aria-expanded="false">Ekstrakurikuler</a>
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
							<li class="nav-item"><a class="nav-link" href="akademik.php">Prestasi</a></li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
                            <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Siswa</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../siswa/aturdata.php">Edit Data</a></li>
									<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>PRAMUKA</h2>
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
	<section class="sample-text-area">
		<div class="container">
			<h3 class="text-heading title_color">Pengertian Pramuka</h3>
			<p style="font-family:Arial">
            Apa itu pramuka? Pramuka adalah singkatan dari Praja Muda Karana dan merupakan organisasi atau gerakan kepanduan. Pramuka adalah sebuah organisasi yang merupakan wadah proses pendidikan kepramukaan yang dilaksanakan di Indonesia. 
            Dalam dunia internasional, Pramuka disebut dengan istilah “Kepanduan” (Boy Scout).

            </p>
            <h3 class="text-heading title_color">Gerakan Pramuka</h3>
            <p style="font-family:Arial">
            memiliki kode Kode Kehormatan Pramuka, sebagaimana yang tertuang dalam Anggaran Dasar Pramuka, Gerakan Pramuka memiliki Kode Kehormatan yang terdiri atas janji yang disebut Satya dan Ketentuan Moral yang disebut Darma Kode Kehormatan Pramuka disesuaikan dengan golongan usia dan perkembangan rohani dan jasmaninya, yaitu:)

            </p>

		</div>
    </section>
    <div class="whole-wrap">
		<div class="container">
						<h3 class="mb-20 title_color">Darma kode Pramuka</h3>
						<div class="">
							<ul class="unordered-list">
								<li style="font-family:Arial"><p>Kode Kehormatan Pramuka Siaga terdiri atas Dwisatya dan Dwidarma</li></p>
								<li style="font-family:Arial"><p>Kode Kehormatan Pramuka Penggalang terdiri atas Trisatya Pramuka Penggalang dan Dasadarma</li></p>
                                <li style="font-family:Arial"><p>Kode Kehormatan Pramuka Penegak dan Pandega terdiri atas Trisatya Pramuka Penegak dan Pramuka Pandega dan Dasadarma</li></p>
                                <li style="font-family:Arial"><p>Kode Kehormatan Pramuka Dewasa terdiri atas Trisatya Anggota Dewasa dan Dasadarma</li></p>				
							</ul>
                    </div>
</div>
</div>
<section class="sample-text-area">
		<div class="container">
			<h3 class="text-heading title_color">Sejarah Pramuka</h3>
			<p style="font-family:Arial">
            dunia pertama kali dipelopori oleh Lord Baden Powell atau nama lengkapnya 
            Robert Sthepenson Smyth Baden Powell of Giwell, seorang warga negara
             Inggris yang pernah menjadi tentara. Sejak kecil Baden Powell
              dikenal sebagai anak yang mencintai kegiatan luar ruangan
               (outdoor) Ia sering bermain di hutan kecil,
                di samping sekolahnya. Kemah pertama kepanduan
                 yang dipimpin Baden Powell, terjadi pada tanggal
                  1 Agustus 1907 yang bertempat di Brownsea Island, Inggris.
                   Karena itulah, Tanggal 1 Agustus pun ditetapkan sebagai Hari Kepanduan Dunia.

            </p>

            <h3 class="text-heading title_color">Lambang Gerakan Pramuka</h3>
			<p style="font-family:Arial">
            Lambang Gerakan Pramuka adalah gambar silhouette Tunas Kelapa yang diciptakan oleh bapak Sunardjo, seorang pensiunan Departemen Pertanian.

            </p>
</div>
<div class="whole-wrap">
		<div class="container">
       
						<h3 class="mb-20 title_color">Arti dari lambang pramuka</h3>
						<div class="">
							<ul class="unordered-list">
								<li style="font-family:Arial"><p>Buah Nyiur dalam keadaan tumbuh dinamakan cikal dan istilah cikal bakal di Indonesia berarti: penduduk asli yang pertama, yang menurunkan generasi baru. Dengan kata lain lambang buah Nyiur yang tumbuh itu mengkiaskan, bahwa tiap Pramuka merupakan inti bagi kelangsungan hidup bangsa Indonesia.</li></p>
								<li style="font-family:Arial"><p>Buah Nyiur dapat bertahan lama dalam keadaan yang bagaimanapun juga, yang menggambarkan bahwa setiap Pramuka adalah seorang yang rokhaniah dan jasmaniah sehat, kuat dan ulet serta besar tekadnya dalam menghadapi segala tantangan dalam hidup dan dalam menempuh segala ujian dan kesukaran untuk mengabdi tanah air dan bangsa Indonesia.</li></p>
                                <li style="font-family:Arial"><p>Nyiur dapat tumbuh di mana saja, yang membuktikan besarnya daya-upayanya dalam menyesuaikan dirinya dengan keadaan sekelilingnya, artinya tiap Pramuka dapat menyesuaikan diri dalam masyarakat dimana ia berada dan dalam keadaan yang bagaimanapun juga.</li></p>
                                <li style="font-family:Arial"><p>Nyiur bertumbuh menjulan lurus ke atas dan merupakan salah satu pohon yang tertinggi di Indonesia. Ini mencerminkan bahwa tiap Pramuka mempunyai cita-cita yang tinggi dan lurus yakni yang mulia dan jujur dan ia tetap tegak tidak mudah diombang-ambingkan oleh sesuatu.</li></p>
                                <li style="font-family:Arial"><p>Akar Nyiur yang bertumbuh kuat dan erat di dalam tanah melambangkan bahwa tekad dan keyakinan tiap Pramuka mempunyai dan berpegang kepada dasar-dasar dan landasan-landasan yang baik, benar, kuat, dan nyata, ialah tekat dan keyakinan yang dipakai olehnya untuk memperkuat diri guna mencapai cita-citanya.</li></p>
                                <li style="font-family:Arial"><p>Nyiur adalah pohon serbaguna, dari ujung hingga akarnya. Jadi lambang itu mengkiaskan bahwa tiap Pramuka adalah manusia yang berguna dan membaktikan diri dan kegunaannya kepada kepentingan tanah air, bangsa dan Negara Kesatuan Republik Indonesia serta kepada umat manusia.</li></p>
							</ul>
						</div>
                    </div>

</div>
				<!-- single course -->
<!--================ End Popular Courses Area =================-->

<!--================ Start Fact Area =================-->

<!--================ End Fact Area =================-->
<!--================ Start Testimonial Area =================-->

<!--================ End Testimonial Area =================-->

<!--================ Start Registration Area =================-->

<!--================ End Registration Area =================-->

<!--================ Start Events Area =================-->
<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<h3 class="title_color">Image Gallery</h3>
				<div class="row gallery-item">
					<div class="col-md-4">
						<a href="img/pramuka.jpg" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/pramuka.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/pramuka.jpg" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/pramuka.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/pramuka.jpg" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/pramuka.jpg);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="img/pramuka.jpg" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/pramuka.jpg);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="img/pramuka.jpg" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/pramuka.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/pramuka.jpg" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/pramuka.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/pramuka.jpg" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/pramuka.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/pramuka.jpg" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/pramuka.jpg);"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--================Contact Area =================-->

	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="row">
					<div class="col-md-12 text-center">
						<font size="3" color="#333333">&copy;2019 || SMK DARUS SALAM<br>All Rights Reserved<br>Powered by Kelompok 4 | Design by <a href="http://instagram.com/febreroaraya_" target="newtab"><u>Febrero Araya K</u></a></font>
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