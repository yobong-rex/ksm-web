@extends('layout.layout')

@section('content')

<nav class="main-nav-outer" id="test">
	<!-- main-nav -->
	<div class="container">
		<ul class="main-nav">
			<li><a href="#bursa-soal">Bursa Soal</a></li>
			<li><a href="#lsta">LSTA</a></li>
			<li class="small-logo"><a href="#header"><img src="{{asset( '/assets/img/logo-ksmif.png' ) }}" alt="" width="120px"></a></li>
			<li><a href="#events">Events</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		<a class="res-nav_click" href="#"><i class="fas fa-bars"></i></a>
	</div>
	<!-- /main-nav -->
</nav>

<!-- Event berlangsung Start -->
<section class="main-section" id="event-berlangsung" >
	<div class='container' >
		<div class='row'>
			<h2 class="black">Event announcement</h2> <br>
			<h4 class="black" style="text-align:center">STUDI EKSKURSI</h4> 
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<!-- <div>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div> -->
			<div class="carousel-inner" data-bs-toggle="modal" data-bs-target="#modal-eventnow">
				<div class="carousel-item active d-flex justify-content-center">
				<img src="{{asset( '/assets/img/event/1.jpg' ) }}" class="d-block w-100" style="max-width: 50%; height: auto;" alt="...">
				</div>
				
			</div> <br>
			<!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button> -->
			<div>
			<p class="animated fadeInDown delay-07s black" style="text-align:center; font-size: 120%; line-height: 120%;" >Halo teman-teman... <br> Tahun ini KSM-IF Universitas Surabaya akan mengadakan kegiatan STUDI EKSKURSI seperti biasanya, dan kegiatan kali ini akan dilaksanakan full secara online ya... <br> Jadi teman-teman akan menerima banyak materi dari perusahaan multinasional maupun public figure, seputar dunia Teknologi dan Informasi.</p> <br>
			</div>
			<h4 style="padding-top:10px;text-align:center;" class="black">Open Registration</h4>
			<h4 style="padding-top:10px;text-align:center;" class="black">2 July 2021 - 8 July 2021</h4> <br>
			<center><a href="/pendaftaran"><button type="button" class="btn btn-success">Daftar</button></a></center> <br> <br>
			</div> 
		</div>
	</div>
</section> 
<!-- Event berlangsung end -->

<!-- modal event berlangsung start -->
<div class="modal fade" id="modal-eventnow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">STUDI EKSKURSI 2021</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img src="{{asset( '/assets/img/event/1.jpg' ) }}" class="d-block w-100" alt="...">
    			</div>
 			</div>
		</div>
    	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal event berlangsung end-->

<!-- BURSA SOAL start -->
<section class="main-section" id="bursa-soal">
	<!-- main-section -->
	<div class="container" >
		<div class="row">
			<figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s">
				<img src="{{asset( '/assets/img/logo-bursa.png' ) }}" alt="">
			</figure>
			<div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
				<!--<h2>bursa soal</h2>-->
				<h6 style="text-align: left;" class="black">Kumpulan soal-soal ujian Teknik Informatika untuk menghadapi UTS dan UAS. Sukses Ujiannya!</h6>
				<div class="service-list">
					<div class="service-list-col1">
						<i class="fas fa-download"></i>
					</div>
					<div class="service-list-col2">
						<h3 ><a href="https://bit.ly/BursaSoalUasGanjil2020" class="black">download </a></h3>
						<p class="black"> Silahkan download soal-soal ujian disini.</p>
					</div>
				</div>
				<div class="service-list">
					<div class="service-list-col1">
						<i class="fas fa-chart-bar"></i>	
					</div>
					<div class="service-list-col2">
						<h3><a href="https://bit.ly/KuesionerBursaSoalUASGanjil2020" class="black">questionnaire</a></h3>
						<p class="black">Jangan lupa ya isi kuesionernya, kritik dan saran kalian untuk membangun Bursa Soal lebih baik.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /main-section -->
</section>
<!-- BURSA SOAL end -->

<!-- LSTA start -->
<section class="main-section" id="lsta" >
	<!-- main-section -->
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
				<!--<h2>lsta</h2>-->
				<h6 style="text-align: left;" class="black">LSTA (Latihan Sidang Tugas Akhir) merupakan kegiatan Jurusan Informatika yang ditujukan untuk mahasiswa tingkat 3 (tiga) dalam menghadapi Tugas Akhir.</h6>
				<div class="service-list">
					<div class="service-list-col1">
						<i class="fas fa-chalkboard-teacher"></i>
					</div>
					<div class="service-list-col2">
						<h3><a href="#info-lsta" class="black">informasi penyaji</a></h3>
						<p class="black">Diperuntunkan untuk mahasiswa semester 7 (tujuh) atau 8 (delapan) yang akan mengikuti sidang Tugas Akhir.</p>
					</div>
				</div>
				<div class="service-list">
					<div class="service-list-col1">
						<i class="fas fa-headphones"></i>
					</div>
					<div class="service-list-col2">
						<h3><a href="#info-lsta" class="black">informasi pendengar</a></h3>
						<p class="black">Diperuntunkan untuk mahasiswa yang telah menempuh 90 SKS.</p>
					</div>
				</div>
			</div>
			<figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s">
				<img src="{{asset( '/assets/img/logo-lsta.png' ) }}" alt="">
			</figure>
		</div>
	</div>
	<!-- /main-section -->
</section>
<!-- LSTA end -->

<!-- INFO LSTA start -->
<section class="main-section" id="info-lsta" >
	<!-- main-section -->
	<div class="container">
		<h2 class="black">Persyaratan LSTA</h2>
		<h6 class="black">Beberapa persyaratan yang harus dipenuhi untuk menjadi peserta LSTA.</h6>
		<div class="row">
			<div class="col-lg-6 col-md-12 wow fadeIn delay-02s" id="lsta-penyaji">
				<h3 class="black">penyaji</h3>
				<label class="black">Biaya Pendaftaran : Rp 25.000,00</label>
				<ul>
					<li class="black"><b>Surat Maju Sidang</b> lengkap dengan <b>tanda tangan dosen pembimbing</b></li>
					<li class="black"><b>Sertifikat Pendengar</b> LSTA (1 sertifikat)</li>
					<li class="black">Abstraksi lengkap dengan <b>NAMA, NRP, serta JUDUL TUGAS AKHIR</b> (dikumpulkan sebanyak 30 lembar dimasukkan ke map cokelat)</li>
					<li class="black">PPT untuk Presentasi LSTA dengan format <b>NRP_NAMA_[Pengiriman ke berapa]</b></li>
				</ul>
				<div class="col-lg-12 col-md-12 col-xs-12">
					<!-- <a href="http://bit.ly/penyaji" class="btn btn-secondary">Daftar Penyaji</a> -->
				</div>
			</div>
			<div class="col-lg-6 col-md-12 wow fadeIn delay-02s" id="lsta-pendengar">
				<h3 class="black">pendengar</h3>
				<label class="black">Biaya Pendaftaran : Rp 20.000,00</label>
				<ul>
					<li class="black">Sudah menempuh <b>90 SKS</b></li>
					<li class="black">Bagi mahasiswa yang memiliki <b>Kartu Biru</b>, kartu tersebut dapat dilampirkan dalam form pendaftaran</li>
				</ul>
				<div class="col-lg-12 col-md-12 col-xs-12">
					<!-- <a href="http://bit.ly/lstapendengarifsi2019" class="btn btn-secondary">Daftar Pendengar IF atau SI</a> -->
					<!-- <a href="http://bit.ly/lstapendengarmm2019" class="btn btn-secondary">Daftar Pendengar MM</a> -->
				</div>
			</div>
		</div>
	</div>
	<!-- /main-section -->
</section>
<!-- INFO LSTA end -->

<!--ACARA-->
<section class="main-section paddind" id="events" >
	<!--main-section client-part-start-->
	<div class="container">
		<h2 class="black">Events</h2>
		<h6 class="black">Persembahan dari KSM INFORMATIKA selama 1 periode.</h6>
	</div>
	<div class="portfolioContainer wow fadeInUp delay-04s">
		<div class="row detail-acara" id="acara1" data-bs-toggle="modal" data-bs-target="#modal-acara1">
	        <div class="container">
				<div class="row align-items-start">
					<!-- tulisan di sebelah kiri -->
					<div class="col">
						<h2>Programing Competitive</h2>
						<p class="detail-desc">Programming Competition merupakan kegiatan berbentuk kompetisi algoritma dan logika pemrograman untuk mahasiswa Universitas Surabaya khususnya jurusan Teknik Informatika. Kegiatan Programming Competition diadakan dengan tema “Solve the Problems With Your Creativity” yang dilaksanakan secara online via Zoom.</a>
						</p>
					</div>
					<div class="col poster">
						<div class=" d-flex justify-content-around">
							<img src="{{asset( '/assets/img/acara1/poster.jpg' ) }}" style="max-width: 40%; height: auto;" alt="">	
						</div>
							
					</div>
				</div>
	        </div>
	    </div>
	    <div class="row detail-acara" id="acara2" data-bs-toggle="modal" data-bs-target="#modal-acara2">
	        <div class="container">
				<div class="row align-items-start">
						<!-- tulisan di sebelah kiri -->
						<div class="col">
							<h2>Seminar Fin-Tech</h2>
							<p class="detail-desc">Seminar Fin-Tech merupakan kegiatan berbentuk webinar yang dibawakan oleh pembicara dari perusahaan dalam bidang financial technology yaitu DANA. Kegiatan Seminar Fin-Tech dibawakan oleh Bayu Seno sebagai Senior Product Specialist dari DANA Indonesia. Pembicara memberikan sebuah seminar dengan tema “Take Challenge and Opportunities by Fin-Tech” yang diberikan secara online via Zoom.</a>
							</p>
						</div>
						<div class="col poster">
							<div class=" d-flex justify-content-around">
								<img src="{{asset( '/assets/img/acara2/poster.png' ) }}" style="max-width: 40%; height: auto;" alt="">
							</div>		
						</div>
					</div>
	        	</div>
	    </div>
	    <div class="row detail-acara" id="acara3" data-bs-toggle="modal" data-bs-target="#modal-acara3">
	        <div class="container">
				<div class="row align-items-start">
						<!-- tulisan di sebelah kiri -->
						<div class="col">
							<h2>Workshop Python</h2>
							<p class="detail-desc">Workshop Python merupakan kegiatan berbentuk workshop/pelatihan untuk membuat suatu project aplikasi tertentu dengan bahasa pemrograman Phyton yang dibawakan oleh seorang tutor yang ahli di bidang Bahasa Pemrogramman Python. Kegiatan Workshop Python dibawakan oleh Bapak Setia Budi, Ph.D. sebagai Maranatha Christian University Lecturer. Pembicara memberikan sebuah materi dan praktik bahasa pemrograman Python dengan tema “Shine Your Day With Knowledge” yang diberikan secara online via Zoom.</a>
							</p>
						</div>
						<div class="col poster">
							<div class=" d-flex justify-content-around">
								<img src="{{asset( '/assets/img/acara3/poster.jpg' ) }}" style="max-width: 40%; height: auto;" alt="">	
							</div>	
						</div>
					</div>
	        	</div>
	        </div>
	    </div>

<!--
		<div class="Portfolio-box printdesign">
			<a href="#"><img src="img/poster-ar.jpg" alt=""></a>
			<h3>Seminar Augmented Reality</h3>
			<p>Seminar yang terbuka untuk seluruh mahasiswa Teknik Universitas Surabaya dengan tema pembicaraan Augmented Reality yang akan dibawakan oleh Dosen Universitas Surabaya, Dr. Delta Ardy Prima, S.ST., M.T.</p>
		</div>
		<div class="Portfolio-box webdesign">
			<a href="#"><img src="img/poster-gd.jpg" alt=""></a>
			<h3>Seminar Game Development II</h3>
			<p>Seminar yang dibuka secara umum mengenai pengembangan game dengan pembicara dari perusahaan game terkenal GAMELOFT.</p>
		</div>
		<div class=" Portfolio-box branding">
			<a href="#"><img src="img/poster-se.jpg" alt=""></a>
			<h3>Studi Ekskursi</h3>
			<p>Acara kunjungan ke berbagai perusahaan terkenal di kota lain yang diselenggarakan secara tahunan oleh KSM-IF yang terbuka untuk umum. Kota tujuan Studi Ekskursi kali ini adalah Jakarta.</p>
		</div>
-->
</section>
<!--main-section client-part-end-->
<!--ACARA end-->

<!-- modal acara start -->
<!-- acara 1 start-->
<div class="modal fade" id="modal-acara1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Programing Competitive</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img src="{{asset( '/assets/img/acara1/1.PNG' ) }}" class="d-block w-100" alt="...">
    			</div>
    			<div class="carousel-item">
      				<img src="{{asset( '/assets/img/acara1/2.PNG' ) }}" class="d-block w-100" alt="...">
    			</div>
    			<div class="carousel-item">
     				 <img src="{{asset( '/assets/img/acara1/3.jpg' ) }}" class="d-block w-100" alt="...">
    			</div>
				<div class="carousel-item">
     				 <img src="{{asset( '/assets/img/acara1/4.PNG' ) }}" class="d-block w-100" alt="...">
    			</div>
				<div class="carousel-item">
     				 <img src="{{asset( '/assets/img/acara1/5.PNG' ) }}" class="d-block w-100" alt="...">
    			</div>
 			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			<p>Proses pengerjaan soal-soal algoritma dan logika pemrograman bersama dengan foto pemenang juara 1-3 dari kegiatan Programming Competition.</p>
		</div>
    	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- acara 1 end-->
<!-- acara 2 start-->
<div class="modal fade" id="modal-acara2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seminar Fin-Tech</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img src="{{asset( '/assets/img/acara2/1.jpg' ) }}" class="d-block w-100" alt="...">
    			</div>
    			<div class="carousel-item">
      				<img src="{{asset( '/assets/img/acara2/2.jpg' ) }}" class="d-block w-100" alt="...">
    			</div>
    			<div class="carousel-item">
     				 <img src="{{asset( '/assets/img/acara2/3.jpg' ) }}" class="d-block w-100" alt="...">
    			</div>
 			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			<p>Pembawaan materi oleh Bapak Bayu Seno sebagai Senior Product Specialist dari DANA Indonesia serta foto bersama dengan seluruh peserta kegiatan Seminar Fin-Tech.</p>
		</div>
    	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- acara 2 end-->
<!-- acara 3 start-->
<div class="modal fade" id="modal-acara3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Workshop Python</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
  			<div class="carousel-inner">
			  <div class="carousel-item active">
      				<img src="{{asset( '/assets/img/acara3/1.png' ) }}" class="d-block w-100" alt="...">
    			</div>
    			<div class="carousel-item">
      				<img src="{{asset( '/assets/img/acara3/2.png' ) }}" class="d-block w-100" alt="...">
    			</div>
    			<div class="carousel-item">
     				 <img src="{{asset( '/assets/img/acara3/3.png' ) }}" class="d-block w-100" alt="...">
    			</div>
				<div class="carousel-item">
     				 <img src="{{asset( '/assets/img/acara3/4.png' ) }}" class="d-block w-100" alt="...">
    			</div>
				<div class="carousel-item">
     				 <img src="{{asset( '/assets/img/acara3/5.png' ) }}" class="d-block w-100" alt="...">
    			</div>
 			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			<p>Pembawaan materi oleh Bapak Setia Budi, Ph.D. sebagai Maranatha Christian University Lecturer dan presentasi hasil praktik oleh peserta workshop serta foto bersama seluruh peserta kegiatan Workshop Python.</p>
		</div>
    	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- acara 3 end-->
<!-- modal acara end -->

<section class="main-section contact" id="contact" >
	<div class="container">
		<h2 class="black">contact us</h2>
		<div class="row">
			<div class="col-lg-6 col-sm-7 wow fadeInLeft">
				<div class="contact-info-box address clearfix">
					<h3 class="black"><i class="icon-map-marker"></i>address:</h3>
					<span class="black">TC 2.3, Universitas Surabaya<br>Jl. Raya Kali Rungkut, Surabaya, Jawa Timur (60293)</span>
				</div>
				<div class="contact-info-box email clearfix">
					<h3 class="black"> <i class="fa-pencil"></i>email:</h3>
					<span class="black">ksm.if.ubaya@gmail.com</span>
				</div>
				<ul class="social-link">
					<li class="instagram"><a href="https://www.instagram.com/ksm_informatika/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li class="line"><a href="http://line.me/ti/p/@rvy2022m" target="_blank"><i class="fab fa-line"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection