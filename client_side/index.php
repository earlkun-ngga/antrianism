<!-- Header -->
<?php include "template/header.php"; ?>

<header>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <a class="navbar-brand" href="#" id="brandnavbar"><b>Antrianism</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mx-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="#about">Apa ini ?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#fitur">Fitur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sisi">Sisi</a>
      </li>
    </ul>
 
    <a href="http://localhost/antrianism/admin_side/login_page.php" class="btn btn-outline-primary "> Login Admin </a>

  </div>
</nav>

<div class="mid"  style="background: #1aabef; height: 400px; padding-bottom: 50px;">
	
	<div class="hero">
	<h2 class="text-light display-4">Metode Antri Menggunakan Aplikasi</h2>
	<p class="text-light mx-auto">Antrian dapat teratur dan terorganisir secara sistem</p>
	<a href="ambil_antrian.php" class="btn " style="color: white; background: #123545; border-radius: 7px;">Ambil Antrian</a>
	<a href="../monitor_side" class="btn " style="color: white; background: #123545; border-radius: 7px;">Monitor Mode</a>
	</div>

	
</div>

</header>



<section class="about" id="about" style="background: #1aabef">
<div class="row align-items-center container  mx-auto">
	<div class="text col-lg-6 col-md-6 col-12 w-50 px-5">
		<h1 class="text-light display-9">Sistem Ngantri</h1>
		<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<div class=" col-lg-6 col-md-6 col-12 w-50 px-5 pb-5">
		<img  class="img-fluid mx-auto" style="width: 80%;" src="http://localhost/antrianism/node_module/assets/gmb1.png">
	</div>
</div>

</section>


<section class="fitur" id="fitur" style="background: white;">
	
<div class="row align-items-center container mt-5 mx-auto py-5">
	

	<div class=" col-lg-6 col-md-6 col-12 w-100 h-100 px-5 py-5">
		<img class="img-fluid" src="http://localhost/antrianism/node_module/assets/gmb2.png">
	</div>

	<div class="text col-lg-6 col-md-6 col-12 w-100 h-100 px-5">
		<h1 class="text-dark display-6">Fitur dan kelebihan</h1>
		
		<ul style="list-style-type: disc; color: white; size: 8px;" >
			<li class="text-dark display-9">Antrian tidak mungkin terselak</li>
			<li class="text-dark display-9">Berurutan dan adil untuk sesama pengantri</li>

			<li class="text-dark display-9">Data antrian tersimpan di Database</li>

			<li class="text-dark display-9">Akurat dan Cepat</li>
		</ul>


	</div>
</div>

</section>

<section class="sisi" id="sisi" style="background: #1aabef " >
	
<div class="row align-items-center justify-content-center container mx-auto py-5 ">

<div class="col-12">
<h2 class="text-light" style="text-align: center;">Sisi</h2>
<hr style="background-color: white;">

</div>

<div class="col-lg-3 col-md-3 col-12 m-1 p-2" style="border-radius: 7px; text-align: center; background-color: white">
<img src="http://localhost/antrianism/node_module/assets/gmbcard1.png" class="img-fluid">
<h5>Get Side</h5>

<p>Sisi yang berfungsi sebagai pembuat, dan pencetak karcis dan data antrian</p>
</div>

<div class="col-lg-3 col-md-3 col-12 m-1 p-2" style="border-radius: 7px; text-align: center; background-color: white">
<img src="http://localhost/antrianism/node_module/assets/gmbcard2.png" class="img-fluid">
<h5>Monitor Side</h5>

<p>Sisi yang berfungsi untuk menampilkan antrian yang berlangsung, dan selanjutnya</p>
</div>

<div class="col-lg-3 col-md-3 col-12 m-1 p-2" style="border-radius: 7px; text-align: center; background-color: white">
<img src="http://localhost/antrianism/node_module/assets/gmbcard3.png" class="img-fluid">
<h5>Admin Side</h5>

<p>Sisi yang memanage seluruh antrian, dan menentukan antrian yang mendapatkan giliran</p>
</div>
</section>


<!-- Footer -->
<footer style="background-color: black; color: white" >

  <!-- Footer Elements -->
  

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
       <div class="footer-copyright text-center py-3">© 2021 Copyright
    <a href="#" style="text-decoration: none; color: white"> Pembuat :  Muhammad Erlangga</a>
  </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  
  <!-- Footer Elements -->

  <!-- Copyright -->
  
  <!-- Copyright -->

</footer>
<!-- Footer -->

	



<!-- Footer -->
<?php include "template/footer.php"; ?>