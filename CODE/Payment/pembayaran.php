<!DOCTYPE html>
<html lang="en">
<!--
<head>
  <title>Rest API Client Side Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

-->

<head>
    <title>MAG and XER </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap JS Requirements 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="javascript/javascript.js"> 
    <link rel="stylesheet" href="scss/_transitions.scss">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="javascript/documents.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!--
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
	  <link href="assets/css/open-iconic-bootstrap.min.css" rel="stylesheet" />
	  <link href="assets/css/styles.css" rel="stylesheet" /> -->

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

</head>

<body>

<!-- Nav bar atas -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->

  <a class="navbar-brand" href="#">
    <img src="img/logo.png" width="55" height="30" class="d-inline-block align-top" alt="">
    <b> MAG and XER </b>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/magxer/home.php?#"><b> Beranda</b> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/magxer/pekerjaan.php?#">Pekerjaan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pengaduan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Regulasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tentang</a>
      </li>
    </ul>

    <div class="mx-2">
      <button type="button" class="btn btn-outline-info btn-sm">
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item avatar dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <img src="img/bell.png" width="20" height="20" class="d-inline-block" alt="">  
            <span class="badge badge-danger">4</span>
              <!-- <i class="fas fa-bell"></i> -->
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5" style="font-size: 8pt;">
              <a class="dropdown-item waves-effect waves-light" href="#">
                  <div class="row card">
                      <div class="col-6">
                        <strong>Tunggu beberapa waktu untuk proses rekrut!</strong>
                        <br>Lamaran untuk House Cleaning Maid sudah masuk untuk di-review <br>CrystalBlue Cleaning & Facility Management Company
                        <span class="badge badge-danger ml-2">1</span>
                      </div>
                  </div>
                  <hr>
                </a>
              <a class="dropdown-item waves-effect waves-light" href="#"> 
                <div class="row card">
                      <div class="col-6">
                        <strong>Tahapan rekrut berikutnya sesuai jadwal yang diberikan!</strong>
                        <br>Lamaran untuk House Cleaning Maid sudah masuk untuk di-review <br>Polyfleur Company
                        <span class="badge badge-danger ml-2">2</span>
                      </div>
                </div>
                <hr>
                </a>
              <a class="dropdown-item waves-effect waves-light" href="#">
                <div class="row card">
                      <div class="col-6">
                        <strong>Tunggu beberapa waktu untuk proses rekrut!</strong>
                        <br>Lamaran untuk House Cleaning Maid sudah masuk untuk di-review <br>GreenViel Company
                        <span class="badge badge-danger ml-2">1</span>
                      </div>
                </div>
                <hr>
                </a>
            </div>
          </li>
        </ul>
      </button>
    </div>

    <!-- script dropdown -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <div class="mx-1"> <!-- mx-2 , 30px, style="width: 40px;"-->
    <img class="rounded-circle" width="50" height="50" class="d-inline-block align-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" data-holder-rendered="true">
    </div>
  </div>
</nav>
<br>
<br>
<br>

<!-- Penunjuk halaman --> 
<div class="container-fluid">
  <ol class=" card bg-dark text-white">
    <div class="card-body text-center"><b>Selesaikan transaksi pemesanan Anda dalam</b>
    <div class="card bg-warning text-primary">
    <div class="card-col-sm-6"><h3 style="color:blue;">21 : 47 : 09</h3></div>
    </div>
  </div>
  </div>

  <br>
  <div class="row container-fluid">
  <div class="col-8">
  <div class="card bg-light">
    <div class="card-body text-left">
      <h5 style="text-align:left;" class="card-text"><b>Detail Pesanan Anda</b></h5>
      <p style="text-align:left;">Periksa pesanan Anda dan pilih metode pembayaran untuk menyelesaikan transaksi pesanan Anda</p>
      <img src="tki-2.jpg" class="float-left" width="150" height="150">
      <br style="text-align:left;" class="mx-2">Pelatihan Lancar Berbahasa Inggris Secara Lisan & Tulis
      <br style="text-align:left;" class="mx-2"><b>Rp 445.000</b>
      
    </div>
    <h5 style="text-align:left;" class="card-text"><b>Metode Pembayaran</b></h5>
    <br><input type="radio" id="bank mandiri" name="fav_language" value="Bank Mandiri"> <label="html">Bank Mandiri</label>
    <input type="radio" id="bank bca" name="fav_language" value="Bank BCA">
    <label="DANA">Bank BCA</label>
    <input type="radio" id="Bank BNI" name="fav_language" value="Bank BNI">
    <label for="Bank BNI">Bank BNI</label>

    </div>
  </div>
  <div class="col-4">
  <div class="card bg-light">
    <div class="card-body text-left">
    <h5 style="text-align:left;" class="card-text"><b>Detail Transaksi</b></h5>
    <p style="text-align:left;">Lengkapi item pembelian pesanan Anda dengan memberikan detail pembayaran pesanan Anda</p>
    <h6><b> Alamat email </b></h6>
    <input class="form-control" type="text" placeholder="contoh@gmail.com" aria-label="alamat email" aria-describedby="button-addon2"><br>
    <h6><b> Nomor Telepon </b></h6>
    <input class="form-control" type="text" placeholder="Masukkan Nomor Telepon Anda" aria-label="nomor telepon" aria-describedby="button-addon2">
    <br>

    <div class="row">
        <div class="col-7">
        <p align="left" style="font-size: 12pt;">Harga Rp 445.000
        <br>Biaya Layanan Rp 5.000
        </div>
    <hr style="height:2px;border-width:0;color:gray;background-color:#F5A201">
    </div>
    </div>


  </div>
</div>

<br>
<!-- Navbar Bawah -->
<nav class="navbar navbar-expand-lg fixed-bottom navbar-light bg-light py-3">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->

  <a class="navbar-brand" href="#">
    <h5><b> Total Harga </b></h5>
    <h6 class="text-primary"><b> Rp 450.000 </b></h6>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-lg-0"> <!-- class="mx-2" style="width: 850px;" my-2 btn-warning -->
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="search"> -->
      <button class="btn btn-outline-dark btn-warning" type="submit"><b href="http://localhost/magxer/pembayaransuccess.php?#">Bayar Sekarang!</b></button>
      <button type="button" class="btn btn-outline-dark mx-2">Batalkan Transaksi</button>
    </form>