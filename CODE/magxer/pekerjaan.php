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
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/magxer/home.php?#">Beranda</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> <b> Pekerjaan </b><span class="sr-only">(current)</span></a>
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
      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      -->
    </ul>
    <form class="form-inline mx-2 my-lg-0"> <!-- my-2 -->
      <input class="form-control mr-sm-2" type="search" placeholder="🔎 Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
    <!-- <div class="mx-2">
    <button type="button" class="btn btn-info"><img src="img/bell.png" width="20" height="20" class="d-inline-block" alt=""><span class="badge badge-light mx-1"> 0</span></button>
    </div>-->

    <div class="mx-2">
      <button type="button" class="btn btn-outline-info btn-sm">
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item avatar dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <img src="img/bell.png" width="20" height="20" class="d-inline-block" alt="">  
            <span class="badge badge-danger">3</span>
              <!-- <i class="fas fa-bell"></i> -->
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5" style="font-size: 8pt;">
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
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-dark">
    <li class="breadcrumb-item"><a href="#">Pekerjaan</a></li>
    <li class="breadcrumb-item"><a href="#">Administrasi Kantor</a></li>
    <li class="breadcrumb-item"><a href="#">Asisten Pribadi</a></li>
    <li class="breadcrumb-item active" aria-current="page">House Maid</li>
  </ol>
</nav>

<!-- card pekerjaan serupa -->
<div class="container-fluid">
  <div class="row">
    <div class="col-8">
      <img src="img/logoperusahaan.png" width="195" height="55" class="d-inline-block align-top" alt="">
      <br>
      <h4>House Cleaning Maid</h4>
      <div class="row">
        <div class="col-7">
          <h6> CrystalBlue Cleaning & Facility Management Company </h6>
          <h6><img src="img/locations.png" width="20" height="20">Dubai, UAE</h6>
          <!-- <img src="img/locations.png" width="20" height="20"> <a href="https://www.google.com/maps/place/CrystalBlue+Cleaning+and+Facility+Management+Services/@25.1855533,55.271605,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5f6beac09905bd:0xd1664b064245534e!8m2!3d25.1855485!4d55.2737937"> Dubai, UAE <a> -->
          <br>
          <p style="font-size: 12pt;"><img src="img/dollar.png" width="25" height="25" class="d-inline-block align-top" alt="">Company prefers to not disclose <br>
          <img src="img/education-insurance.png" width="20" height="20" class="d-inline-block align-top" alt=""> SMA/SMK/STM<br>
          <img src="img/office.png" width="20" height="20" class="d-inline-block align-top" alt=""> Full Time<br>
          <img src="img/job.png" width="20" height="20" class="d-inline-block align-top" alt=""> Pengalaman lebih dari 1 tahun </p>
          <p><img src="img/time.png" width="20" height="20"> Dibuat 2 bulan yang lalu • <b style="color: #F5A201;"> Diperbarui Kemarin </b> • <b style="color: red;"> Berkas Belum Lengkap </b> </p>
          <!--
           Example split warning button
          <b style="color: #00537A;"> Pilih Biro Jasa : </b>
          <div class="btn-group">
            <button type="button" class="btn btn-info">Provinsi</button>
            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          Example split warning button
          <div class="btn-group">
            <button type="button" class="btn btn-info">Perusahaan Biro Jasa</button>
            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          -->
          <!--<form>
            <div class="form-row align-items-center">
            <b style="color: #00537A;"> Pilih Biro Jasa : </b>
               <div class="col-auto my-1">
                ini komen <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label> 
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>Provinsi</option>
                  <option value="1">Jawa Timur</option>
                  <option value="2">Jawa Tengah</option>
                  <option value="3">Jawa Barat</option>
                  <option value="4">DKI Jakarta</option>
                  <option value="5">Bali</option>
                </select>
              </div>
              <div class="col-auto my-1">
                 <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>Perusahaan Biro Jasa</option>
                  <option value="1">PT AMRITA MAHESA PRIMA</option>
                  <option value="2">PT DIAN YOGYA PERDANA</option>
                  <option value="3">PT FICOTAMA BINA TERAMPIL</option>
                  <option value="4">PT NUSA SINAR MAKMUR</option>
                  <option value="5">PT TAFCINDO JASATAMA SEGARA</option>
                </select>
              </div>
            </div>
          </form>-->

          <br>
          
          <!-- script dropdown -->
          <script src="https://code.jquery.com/jquery.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

          <!-- Trigger the modal with a button -->
          <div>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">LAMAR</button>
            <button class="btn btn-warning" type="submit">
              <img src="img/bookmark.png" width="20" height="20" class="d-inline-block float-right" alt=""> Simpan
            </button>
          
            <button class="btn btn-warning" type="submit">
              <img src="img/share.png" width="20" height="20" class="d-inline-block float-right" alt=""> Bagikan
            </button>

            <!-- Modal -->
            <form action="create-pekerjaan.php" method="POST">
              <div id="myModal" class="modal fade form-group" role="dialog">
                <div class="modal-dialog modal-lg form-group">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h6 class="modal-title" align="center"> <b> Anda akan melamar ke CrystalBlue Cleaning & Facility Management Company 
                        sebagai House Cleaning Maid </b></h6>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-7">
                          <h6>Resume</h6>
                          <br>
                          <h6>Data Diri Lengkap</h6>
                          <p align="justify" style="color: gray;">Data diri, ijazah terakhir, KTP, akta kelahiran, kartu keluarga, kartu pencari kerja (AK-1),
                            surat keterangan sehat, buku rekening tabungan pribadi, nomor rekening, email pribadi,
                            sertifikat kompetensi kerja, visa kerja, paspor, perjanjian kerja, perjanjian penempatan,
                            surat keterangan izin wali/orang tua/istri/suami, dan Fotokopi buku nikah/keterangan status pernikahan.
                          </p>
                          <h6>Persyaratan Tambahan</h6>
                          <p align="justify" style="color: gray;">Ujian bahasa negara asal, skill test,
                            medical check up yang telah ditentukan BNP2TKI,
                            SLC (kontrak kerja), dan CCVI (confirmation of
                            certification of visa issuance).</p>
                        </div>
                        <div class="col-5 form-group">
                          <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile01" placeholder="Resume file" name="rfile">
                          </div>
                          <br>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control" id="formFileMultiple1" placeholder="Personal data" name="pdatafile" multiple>
                          </div>
                          
                          <!-- <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                          <input class="form-control" type="file" id="formFileMultiple" multiple /> -->

                          <br>
                          <br>
                          <br>
                          <br>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control" id="formFileMultiple2" placeholder="Additional requirements" name="afile" multiple>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                            <input type="number" class="form-control" placeholder="Nomor Handphone" name="notelepon"> <!-- aria-label="nomorhandphone" aria-describedby="basic-addon1" -->
                          </div>
                        </div>

                        <div class="col-6">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                              <img src="img/card.png" width="20" height="20" class="d-inline-block align-top" alt="">
                            </span>
                            <span class="input-group-text">BRI</span>
                            <input type="number" class="form-control" placeholder="Nomor Rekening" name="norekening"> <!-- aria-label="nomorrekening" aria-describedby="basic-addon2" -->
                          </div>
                        </div>
                        
                      </div>
                      <div class="row form-group">
                          <div class="form-row align-items-center">
                            <b style="color: #00537A;" class="mx-3"> Pilih Biro Jasa : </b>
                            <div class="col-auto my-1">
                              <select class="custom-select mr-sm-2 form-control" name="provinsi"> <!-- id="inlineFormCustomSelect1" -->
                                <option selected>Provinsi</option>
                                <option value="1">Jawa Timur</option>
                                <option value="2">Jawa Tengah</option>
                                <option value="3">Jawa Barat</option>
                                <option value="4">DKI Jakarta</option>
                                <option value="5">Bali</option>
                              </select>
                            </div>
                            <div class="col-auto my-1">
                              <!-- <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label> -->
                              <select class="custom-select mr-sm-2 form-control" name="perusahaanbiro"> <!-- id="inlineFormCustomSelect2" -->
                                <option selected>Perusahaan Biro Jasa</option>
                                <option value="1">PT AMRITA MAHESA PRIMA</option>
                                <option value="2">PT DIAN YOGYA PERDANA</option>
                                <option value="3">PT FICOTAMA BINA TERAMPIL</option>
                                <option value="4">PT NUSA SINAR MAKMUR</option>
                                <option value="5">PT TAFCINDO JASATAMA SEGARA</option>
                              </select>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer form-group">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <!--<button type="button" class="btn btn-warning" data-dismiss="modal">LAMAR SEKARANG</button>-->
                      <input type="submit" value="LAMAR SEKARANG" class="btn btn-warning" name="btnlamar">
                    </div>
                  </div>
              </div>
            </form>     

          </div>
          </div>
          <br>
        </div>
        <div class="col-5">
          <!--Google map-->
          <!-- <iframe src="https://maps.google.com/maps?q=dubai&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0" allowfullscreen></iframe> -->
          <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 170px">
            <iframe src="https://maps.google.com/maps?q=dubai&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="width: 355px; height: 160px;" allowfullscreen></iframe>
          </div>
          <!--Google Maps <img src="img/education-insurance.png" width="20" height="20" class="d-inline-block align-top" alt="">-->
          <p>
            <img src="img/staffbekerja.jpg" width="175" height="90" class="d-inline-block align-top" alt="">
            <img src="img/staffbekerjadua.jpg" width="175" height="90" class="d-inline-block align-top" alt="">
          </p>
          <a href="https://www.crystalblu.ae">Lihat Selebihnya ...</a>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-7">
          <p align="justify" style="font-size: 12pt;"> Ketika layanan pembersihan dipesan dengan bahan pembersih, pelayan profesional akan datang dengan 
            tas CrystalBlue branded dan membawa semua peralatan yang relevan untuk memastikan bahwa majikan 
            mendapatkan pembersihan rumah atau kantor yang sempurna. Singkatnya, pembersih profesional akan 
            bertanggung jawab untuk membersihkan rumah dengan beberapa peralatan seperti :
            <br>
            <br>Penyedot debu
            <br>Pel dan Ember
            <br>Pembersih kaca
            <br>Perabotan Polandia
            <br>Kain Microfibre
            <br>Sikat pembersih
            <br>Pembersih lantai
            <br>Pembersih Serbaguna
            <br>Krim penggosok
            <br>Pemutih
        </div>
        <div class="col-5">
          <p align="justify" style="font-size: 12pt;"> Tangung Jawab Pekerjaan
            Asisten Rumah Tangga yang dapat membersihkan rumah, memasak dan menjaga anak atau orang tua
          <br><br> Kualifikasi <br> Wanita berusia 21-40 thn <br> Memiliki kemauan yang tinggi <br> Membawa dokumen KTP, KK, IJAZAH/AKTE KELAHIRAN</p>
        </div>
      </div>

      <div class="row">
        <div class="card">
          <div class="card-body">
          <div class="media">
            <img class="align-self-start mr-3" src="img/logoperusahaan.png"  alt="Generic placeholder image" width="150" height="50">
            <div class="media-body">
              <h5 class="mt-0">CrystalBlue Cleaning & Facility Management Company</h5>
              <h6 class="mt-0"> <p style="color: gray;"> Cleaning Services • 50-200 karyawan </p></h6>
              <p align="justify">Dubai adalah tempat yang sangat kompetitif. 
                Ada begitu banyak atraksi dan peluang yang cenderung membebani waktu Anda. 
                Terkadang, aspek kehidupan yang lebih kecil, namun sangat penting 'tidak ada permainan kata-kata' 
                dapat menciptakan badai. Rumah yang sangat bersih dan berkilau adalah salah satunya. 
                Melalui pengalaman pribadi kami, kami menyadari betapa menantangnya hal ini. 
                Mengapa satu pasangan harus menanggung semua beban membuat rumah bersinar! 
                Bukankah dia pantas mendapatkan apa yang dia inginkan?</p>
              <p align="justify">Tidak ada kekurangan perusahaan pembersih di Dubai. 
                Namun, berapa banyak dari mereka yang menghormati apa yang mereka janjikan? 
                Itu pertanyaan yang sulit? Apakah mereka selalu sampai di rumah Anda tepat waktu? 
                Ini selalu tentang menghitung jam dan sebelum kita lupa, banyak pengecualian untuk 
                layanan tata graha yang dijanjikan. Di sinilah kami ingin membuat perbedaan untuk Anda.</p>
              <p align="justify">Crystal Blue dibentuk dengan dalih pengalaman kami sendiri. 
                Kami akan berkomitmen untuk menawarkan layanan pembersihan rumah yang transparan dan menyenangkan. 
                Pelayan kami akan selalu berusaha untuk menghubungi Anda secepat mungkin karena kami memahami 
                bahwa Anda memiliki kehidupan yang sibuk dan ingin fokus pada aspek kehidupan yang lebih besar.
                Kami akan memberikan apa yang kami janjikan dan tidak akan mengambil jalan pintas. Kami ingin
                memberi Anda rumah dan nilai terbaik, karena kami tahu Anda menginginkan hal yang sama.</p>
              <p> <a href="https://www.crystalblu.ae">Lihat Lebih Banyak ...</a></p>
            </div>
          </div>
          </div>
        </div>
      </div>
      <br>

    </div>
    <div class="col-4">
      <br>
      <h6> <b> Pekerjaan serupa untuk Anda </b></h6>

      <div class="card border-dark mb-3" style="max-width: 25rem;">
        <div class="card-header bg-transparent">
          <img src="img/bookmark.png" width="20" height="20" class="d-inline-block align-right float-right" alt="">
        </div>
        <div class="card-body text-success">
        
          <div class="row">
            <div class="col-3">
              <img src="img/logocardsatu.png" width="90" height="40">
            </div>
            <div class="col-9">
              <h6 class="card-title"> <b>Tukang Payet Intern</b></h6>
              <h6><i>Metta Febriyan Bridal and Couture</i></h6>
              <h6><img src="img/locations.png" width="20" height="20">Abu Dhabi, UAE</h6>
              <p class="card-text">
                <img src="img/dollar.png" width="20" height="20" class="d-inline-block align-top" alt="">  Company prefers to not disclose <br>
                <img src="img/education-insurance.png" width="20" height="20" class="d-inline-block align-top" alt="">  SMA/SMK/STM<br>
                <img src="img/office.png" width="20" height="20" class="d-inline-block align-top" alt="">  Internship
                <!-- <p><img src="img/work.png" width="50" height="30" class="d-inline-block align-top" alt="">Pengalaman lebih dari 1 tahun</p> -->
              </p>
            </div>
          </div>
        </div>
        <div class="card-footer bg-transparent">
          <img src="img/time.png" width="20" height="20"> Dibuat 1 bulan yang lalu</div>
      </div>

      <div class="card border-dark mb-3" style="max-width: 25rem;">
        <div class="card-header bg-transparent">
          <img src="img/bookmark.png" width="20" height="20" class="d-inline-block align-right float-right" alt="">
        </div>
        <div class="card-body text-success">
        
          <div class="row">
            <div class="col-3">
              <img src="img/logocardsatu.png" width="90" height="40">
            </div>
            <div class="col-9">
              <h6 class="card-title"> <b>Personal Assistant</b></h6>
              <h6><i>PT. Hamura Digital Agensi</i></h6>
              <h6><img src="img/locations.png" width="20" height="20">Fujairah, UAE</h6>
              <p class="card-text">
                <img src="img/dollar.png" width="20" height="20" class="d-inline-block align-top" alt="">  IDR 7000000-10000000/month <br>
                <img src="img/education-insurance.png" width="20" height="20" class="d-inline-block align-top" alt="">  Diploma<br>
                <img src="img/office.png" width="20" height="20" class="d-inline-block align-top" alt="">  Full Time
                <!-- <p><img src="img/work.png" width="50" height="30" class="d-inline-block align-top" alt="">Pengalaman lebih dari 1 tahun</p> -->
              </p>
            </div>
          </div>
        </div>
        <div class="card-footer bg-transparent">
          <img src="img/time.png" width="20" height="20"> Dibuat 2 bulan yang lalu</div>
      </div>

      <div class="card border-dark mb-3" style="max-width: 25rem;">
        <div class="card-header bg-transparent">
          <img src="img/bookmark.png" width="20" height="20" class="d-inline-block align-right float-right" alt="">
        </div>
        <div class="card-body text-success">
        
          <div class="row">
            <div class="col-3">
              <img src="img/logocardsatu.png" width="90" height="40">
            </div>
            <div class="col-9">
              <h6 class="card-title"> <b>Personal Assistant</b></h6>
              <h6><i>Grow Little Garden</i></h6>
              <h6><img src="img/locations.png" width="20" height="20">London, UK</h6>
              <p class="card-text">
                <img src="img/dollar.png" width="20" height="20" class="d-inline-block align-top" alt="">  IDR 8000000-15000000/month <br>
                <img src="img/education-insurance.png" width="20" height="20" class="d-inline-block align-top" alt="">  Diploma/S1<br>
                <img src="img/office.png" width="20" height="20" class="d-inline-block align-top" alt="">  Full Time
                <!-- <p><img src="img/work.png" width="50" height="30" class="d-inline-block align-top" alt="">Pengalaman lebih dari 1 tahun</p> -->
              </p>
            </div>
          </div>
        </div>
        <div class="card-footer bg-transparent">
          <img src="img/time.png" width="20" height="20"> Dibuat 3 minggu yang lalu</div>
      </div>

      <div class="card border-dark mb-3" style="max-width: 25rem;">
        <div class="card-header bg-transparent">
          <img src="img/bookmark.png" width="20" height="20" class="d-inline-block align-right float-right" alt="">
        </div>
        <div class="card-body text-success">
        
          <div class="row">
            <div class="col-3">
              <img src="img/logoperusahaan.png" width="90" height="30">
            </div>
            <div class="col-9">
              <h6 class="card-title"> <b>Painting Service</b></h6>
              <h6><i>Crystal Blue</i></h6>
              <h6><img src="img/locations.png" width="20" height="20">Abu Dhabi, UAE</h6>
              <p class="card-text">
                <img src="img/dollar.png" width="20" height="20" class="d-inline-block align-top" alt="">  Company prefers to not disclose <br>
                <img src="img/education-insurance.png" width="20" height="20" class="d-inline-block align-top" alt="">  SMA/SMK/STM<br>
                <img src="img/office.png" width="20" height="20" class="d-inline-block align-top" alt="">  Internship
                <!-- <p><img src="img/work.png" width="50" height="30" class="d-inline-block align-top" alt="">Pengalaman lebih dari 1 tahun</p> -->
              </p>
            </div>
          </div>
        </div>
        <div class="card-footer bg-transparent">
          <img src="img/time.png" width="20" height="20"> Dibuat 2 minggu yang lalu</div>
      </div>

    </div>
  </div>
</div>

<!-- Chat bot-->


<!-- navbar bawah -->
<br>
<nav class="navbar navbar-expand-lg fixed-bottom navbar-light bg-light py-3">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->

  <a class="navbar-brand" href="#">
    <h5><img src="img/logoperusahaan.png" width="100" height="30" class="d-inline-block align-top" alt="">
    <b> House Cleaning Maid </b></h5>
    <h6><i> CrystalBlue Cleaning & Facility Management Company </i></h6>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <div class="mx-2" style="width: 850px;">
        <img src="img/bookmark.png" width="32" height="32" class="d-inline-block float-right" alt="">
        <img src="img/share.png" width="32" height="32" class="d-inline-block float-right" alt="">
      </div>
    </ul>
    <form class="form-inline my-lg-0"> <!-- class="mx-2" style="width: 850px;" my-2 btn-warning -->
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="search"> -->
      <button class="btn btn-outline-primary my-2 my-sm-0 btn-warning" type="submit">LAMAR</button>
    </form>

    <!-- <form class="form-inline my-lg-0">
      <div id="documents"><button type="button" class="btn btn-outline-primary my-2 my-sm-0 btn-warning" data-toggle="modal" data-target="#documents-modal">LAMAR</button></div>
        <div id="documents-modal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <p>Documents Form</p>
                <a class="close" data-dismiss="modal">×</a>
              </div>
              <form id="documentsForm" name="documents" role="form">
                <div class="modal-body">				
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control"></textarea>
                  </div>					
                </div>
                <div class="modal-footer">					
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-success" id="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </form> -->
  </div>
</nav>

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
                        <!--<br>
                        <br> Platform menghubungkan antara dokumen calon pekerja Indonesia dengan data yang
                        terintegrasi untuk mempermudah perekrutan. Domain pekerjaan yang ditawarkan oleh platform
                        sesuai dengan kebutuhan masing-masing perusahaan worldwide yang mendaftarkan rincian pekerjaan. -->
                        
                        <!-- <br>Dalam penggunaan sistem ini, mitra perusahaan luar negeri menambahkan informasi
                        lowongan pekerjaan berupa nama profesi yang dibutuhkan, deskripsi pekerjaan, syarat
                        yang dibutuhkan calon pekerja, lama waktu dan penempatan kontrak bekerja, jumlah gaji,
                        dan batas waktu untuk melamar pekerjaan. Pengguna calon pekerja dapat mencari informasi
                        perusahaan yang sesuai dengan skill dan melihat requirement yang dibutuhkan. Calon pekerja
                        yang telah melengkapi biodata dalam profile dapat secara langsung mendaftar pekerjaan dan
                        menunggu hasil pengumuman untuk melanjutkan tahapan interview atau tahapan lain sesuai dengan
                        ketentuan perusahaan. Seluruh alur proses pendaftaran hingga keberangkatan calon pekerja akan
                        dipantau oleh internal biro PJTKI serta sesuai dengan regulasi pemerintahan. -->

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