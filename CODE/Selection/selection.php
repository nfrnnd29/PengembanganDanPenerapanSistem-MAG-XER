<!DOCTYPE html>
<html lang="en">

<head>
    <title>MAG and XER </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="javascript/documents.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
</head>

<body>
    <!-- navigation bar -->
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
                <a class="nav-link" href="http://localhost/projectname/beranda.php?#"><b> Beranda</b> <span class="sr-only">(current)</span></a>
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
    <!-- menu sidebar -->
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4>Job Vacancies</h4>
            </div>
            <ul class="lisst-unstyled compenents">
                <li>
                    <a href="#openvacancy" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Open Vacancies</a>
                    <ul class="collapse lisst-unstyled" id="openvacancy">
                        <li>
                            <a href="#">House cleaning maid</a>
                        </li>
                        <li>
                            <a href="#">Plumber</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#closedvacancy" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Closed Vacancies</a>
                    <ul class="collapse lisst-unstyled" id="closedvacancy">
                        <li>
                            <a href="#">Translator</a>
                        </li>
                        <li>
                            <a href="#">Babysitter</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#onholdvacancy" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">On-hold Vacancies</a>
                    <ul class="collapse lisst-unstyled" id="onholdvacancy">
                        <li>
                            <a href="#">Maid</a>
                        </li>
                        <li>
                            <a href="#">Electrician</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    <div id="content">
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarcollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Sidebar Menu</span>
                </button>
            </div>
        </nav> -->
    <div class="row">
        <div class="col bg-info text-center">Stage 1:<br>New Applicant</div>
        <div class="col text-center">Stage 2:<br>Phone Screen</div>
        <div class="col text-center">Stage 3:<br>Online Assignment</div>
        <div class="col text-center">Stage 4:<br>Interview</div>
        <div class="col text-center">Stage 5:<br>Offer</div>
        <div class="col text-center">Stage 6:<br>Hired</div>
        <br><br>
    </div>
    <br>

    <div class="container mt-3">       
    <table class="table table-hover">
    <thead class="table-info">
      <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Company</th>
        <th>Previous Job</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John Doe</td>
        <td>Surabaya, ID</td>
        <td>PT. ABC</td>
        <td>Plumber</td>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm">Accept</button>
            <button type="button" class="btn btn-outline-danger btn-sm">Reject</button>
            <button type="button" class="btn btn-outline-warning btn-sm">Archive</button>
        </td>
      </tr>

      <tr>
        <td>Waluyo Setiawan</td>
        <td>Surabaya, ID</td>
        <td>PT. ABC</td>
        <td>Engineer</td>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm">Accept</button>
            <button type="button" class="btn btn-outline-danger btn-sm">Reject</button>
            <button type="button" class="btn btn-outline-warning btn-sm">Archive</button>
        </td>
      </tr>

      <tr>
        <td>Ganda Winarno</td>
        <td>Surabaya, ID</td>
        <td>PT. XYZ</td>
        <td>Translator</td>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm">Accept</button>
            <button type="button" class="btn btn-outline-danger btn-sm">Reject</button>
            <button type="button" class="btn btn-outline-warning btn-sm">Archive</button>
        </td>
      </tr>

      <tr>
        <td>Eka Kusmawati</td>
        <td>Surabaya, ID</td>
        <td>Freelancer</td>
        <td>House Maid</td>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm">Accept</button>
            <button type="button" class="btn btn-outline-danger btn-sm">Reject</button>
            <button type="button" class="btn btn-outline-warning btn-sm">Archive</button>
        </td>
      </tr>

      <tr>
        <td>Ikhsan Nainggolan</td>
        <td>Surabaya, ID</td>
        <td>Freelancer</td>
        <td>House Maid</td>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm">Accept</button>
            <button type="button" class="btn btn-outline-danger btn-sm">Reject</button>
            <button type="button" class="btn btn-outline-warning btn-sm">Archive</button>
        </td>
      </tr>

      <tr>
        <td>Marsito Narpati</td>
        <td>Surabaya, ID</td>
        <td>Freelancer</td>
        <td>House Maid</td>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm">Accept</button>
            <button type="button" class="btn btn-outline-danger btn-sm">Reject</button>
            <button type="button" class="btn btn-outline-warning btn-sm">Archive</button>
        </td>
      </tr>

      <tr>
        <td>Humaira Purwanti</td>
        <td>Medan, ID</td>
        <td>Freelancer</td>
        <td>House Maid</td>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm">Accept</button>
            <button type="button" class="btn btn-outline-danger btn-sm">Reject</button>
            <button type="button" class="btn btn-outline-warning btn-sm">Archive</button>
        </td>
      </tr>

      <tr>
        <td>Yoga Dabukke</td>
        <td>Lombok, ID</td>
        <td>Freelancer</td>
        <td>House Maid</td>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm">Accept</button>
            <button type="button" class="btn btn-outline-danger btn-sm">Reject</button>
            <button type="button" class="btn btn-outline-warning btn-sm">Archive</button>
        </td>
      </tr>

      <tr>
        <td>Danu Kuswoyo</td>
        <td>Yogyakarta, ID</td>
        <td>Freelancer</td>
        <td>House Maid</td>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm">Accept</button>
            <button type="button" class="btn btn-outline-danger btn-sm">Reject</button>
            <button type="button" class="btn btn-outline-warning btn-sm">Archive</button>
        </td>
      </tr>

      <tr>
        <td>Humaira Padmasari</td>
        <td>Jakarta, ID</td>
        <td>Freelancer</td>
        <td>House Maid</td>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm">Accept</button>
            <button type="button" class="btn btn-outline-danger btn-sm">Reject</button>
            <button type="button" class="btn btn-outline-warning btn-sm">Archive</button>
        </td>
      </tr>

      <tr>
        <td>Elisa Mardhiyah</td>
        <td>Jakarta, ID</td>
        <td>Freelancer</td>
        <td>House Maid</td>
        <td>
            <button type="button" class="btn btn-outline-primary btn-sm">Accept</button>
            <button type="button" class="btn btn-outline-danger btn-sm">Reject</button>
            <button type="button" class="btn btn-outline-warning btn-sm">Archive</button>
        </td>
      </tr>
    
    </tbody>
  </table>
</div>

    </div>
    </div>

    

 
<!-- js menu sidebar -->
<script>
    $(document).ready(function(){
        $("#sidebarcollapse").on('click',function(){
        $("#sidebar").toggleClass('active');    
        });
    });
</script>

</body>

<!-- footer -->
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