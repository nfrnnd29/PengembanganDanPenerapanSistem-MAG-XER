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
        <a class="nav-link" href="#"><b> Beranda</b> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/projectname/pekerjaan.php?#">Pekerjaan</a>
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
    
    <!-- <div class="mx-2">
    <button type="button" class="btn btn-info"><img src="img/bell.png" width="20" height="20" class="d-inline-block" alt=""><span class="badge badge-light mx-1"> 0</span></button>
    </div>-->

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

<!-- card pekerjaan serupa -->
<div class="container-fluid">

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Transaksi Pembayaran Berhasil!</h4>
        <!--<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> -->
        <hr>
        <strong>Good luck and have fun learning! ^^</strong>
        <br>Untuk melihat detail transaksi pembayaran, silahkan cek receipt pembelian pada alamat email yang telah dicantumkan 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="row">
        <br>
        <br>
        <br>
        <h1 class="display-4 my-4 mx-5"> Halo 👋🏻 <br>Alina Starkov !</h1>
        <h3 class="mx-5" style="font-weight: 200;">Nikmati pengalaman bekerja, jelajahi setiap negara sesuai passion kamu 😁</h3>
    </div>
    <br>
    <!-- <hr style="font-weight: 200;"> -->
    <hr style="height:2px;border-width:0;color:gray;background-color:#F5A201">
    <br>
    <br>
    <h4 class="text-center" style="font-weight: 600;">Cari lowongan pekerjaan impian kamu, temukan <b style="color: green;">10000+</b> pekerjaan setiap bulan!</h4>
    <br>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="input-group mx-3">
                <input class="form-control" type="text" placeholder="🔎 Cari Lowongan" aria-label="Cari Lowongan" aria-describedby="button-addon2">
                <input class="form-control mx-2" type="text" placeholder="🏢 Tambahkan Negara atau Kota" aria-label="Tambahkan Negara atau Kota" aria-describedby="button-addon2">
                <!-- <button class="btn btn-primary" id="button-addon2" type="button">CARI</button>-->
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">CARI</button>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <br>
    <br>
    <hr style="height:2px;border-width:0;color:gray;background-color:#F5A201">
    <br>
    <br>
    <h5 class="text-center" style="font-size: 20pt;"><b>Simak Yuk, Apa kata mereka 🤔</b></h5>
    <br>
    <div class="row">
        <div class="card-deck mx-5 text-justify">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">🙎🏻‍♂️ Donnovan Patrick 🇫🇷</h5>
                <p class="card-text">Saya telah bekerja selama 4 tahun di Swarm Tech, Paris. Suasana pekerjaan yang sangat nyaman dan mendukung saya untuk meraih impian saya sebagai seorang teknisi. Terima Kasih MAG and XER! <br><br><br><br><br><br><br> <u style="color: blue;"> @donnovanpatrick129 </u></p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Terakhir diperbarui 3 menit yang lalu</small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">🧕🏻 Isabella Laura S. 🇬🇧</h5>
                <p class="card-text">Pengalaman tidak terlupakan ketika bekerja sebagai perakit jam tangan terkemuka di Glasgow, UK. Magang selama 12 bulan sangat menguntungkan bagi saya untuk mendapatkan wawasan serta lingkungan kerja yang mendukung saya untuk terus maju. MAG and XER sangat membanut saya mewujudkan cita-cita saya!<br><br><br><br><br> <u style="color: blue;"> @isabellalas332 </u></p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Terakhir diperbarui 15 menit yang lalu</small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">🤵🏻‍♀️ Valerie Zarah 🇦🇪</h5>
                <p class="card-text">لقد ساعدتني تجربة العمل كطاهي في مطعم خمس نجوم على تنمية موهبتي! تعال وانضم إلينا وحقق أحلامك في الإمارات</p>
                <p class="card-text" style="font-size: 8pt;"> terjemahan</p>
                <hr style="color: gray;">
                <p class="card-text">Pengalaman bekerja sebagai juru masak sebuah restoran bintang lima sangat membantu saya untuk mengembangkan bakat saya! Ayo segera bergabung dengan kami dan wujudkan impian kalian di UAE <br><br> <u style="color: blue;"> @valeriezarah910 </u></p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Terakhir diperbarui 45 menit yang lalu</small>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>

</body>

<div class="d-flex flex-column h-100">
    <footer class="w-100 py-4 flex-shrink-0" style="background-color: black;">
        <div class="container py-4">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="h1 text-white">MAG and XER</h5>
                        <p class="small text-muted" align="justify">
                        MAG and XER merupakan platform berupa website untuk membantu calon
                        pekerja berkewarganegaraan Indonesia menemukan pekerjaan yang sesuai
                        dengan berbagai macam skill tertentu di luar negeri. Platform dikelola
                        oleh biro Perusahaan Jasa Tenaga Kerja Indonesia (PJTKI) bekerja
                        sama dengan beberapa perusahaan asing di luar negeri.

                        </p>
                        <p class="small text-muted mb-0"> Copyright &copy;2022 by MAG and XER, Inc. <br>All rights reserved.</p>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-3">Perusahaan</h5>
                        <br>
                        <br>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#">Tentang</a></li>
                            <li><a href="#">Karir</a></li>
                            <li><a href="#">Laporan Kerentanan</a></li>
                            <li><a href="#">Syarat & Ketentuan</a></li>
                            <li><a href="#">Regulasi</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-3">Temukan Lowongan Berdasarkan</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#">Lokasi Pekerjaan</a></li>
                            <li><a href="#">Nama Perusahaan</a></li>
                            <li><a href="#">Kategori Pekerjaan</a></li>
                            <li><a href="#">Paling Banyak Dicari</a></li>
                            <li><a href="#">Pusat Bantuan</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-3">Newsletter</h5>
                        <p class="small text-muted">Sign Up untuk mendapatkan lebih banyak newsletter lowongan kerja MAG and XER.
                            <br>
                            <br>
                            Anda akan diarahkan ke situs dengan informasi lebih lanjut di newsletter kami. Registrasi Anda akan terjadi di sana!
                        </p>
                        <form action="#">
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" placeholder="Recipient's E-mail" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-warning" id="button-addon2" type="button"><img src="img/plane.png" width="20" height="20" class="d-inline-block align-top" alt=""></button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </footer>
</div>

</html>