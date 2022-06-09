<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magandxerdb";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // $sql = "INSERT INTO pelamartb(no_telepon,provinsi,perusahaan_birojasa,resume_file,datadiri_file,tambahan_file)
    // VALUES (,1,2,'aaaa','aaaa','aaaa')";
    $resume_file=$_POST['afile'];
    $datadiri_file=$_POST['pdatafile'];
    $resume_file=$_POST['rfile'];
    //$datadiri_file=$_POST['pdatafile'];
    //$tambahan_file=$_POST['afile'];
    $no_telepon=$_POST['notelepon'];
    $provinsi=$_POST['text']; //provinsi
    $perusahaan_birojasa=$_POST['text1']; //perusahaanbiro
    $no_rekening=$_POST['norekening']; // tambah rekening, tapi masuk database pembayaran

    echo "Bisa atau enggak <br>";

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    echo "lanjut ternyata bisa <br>";

    // cari path lokasinya kalo file, di link + youtube dari kevin
    //$sql1="INSERT INTO pelamartb(resume_file,datadiri_file,tambahan_file,no_telepon,provinsi,perusahaan_birojasa)
    //VALUES ('test','test','test',$no_telepon,$provinsi,$perusahaan_birojasa)";

    $sql1="INSERT INTO pelamartb(resume_file,datadiri_file,tambahan_file,no_telepon,provinsi,perusahaan_birojasa)
    VALUES ('test','test','test',$no_telepon,'$provinsi','$perusahaan_birojasa')";

    echo "BISA JUGA NIH <br>";
    //VALUES ('C:\Document\logocard.png',$datadiri_file,$resume_file,$no_telepon,$provinsi,$perusahaan_birojasa)";
    //VALUES ($resume_file,$datadiri_file,$resume_file,$no_telepon,$provinsi,$perusahaan_birojasa)";

    $sql2="INSERT INTO pembayarantb(no_rekening)
    VALUES ($no_rekening)";

    echo "AAAA NIH <br>";
    // use exec() because no results are returned
    $conn->exec($sql1);
    $conn->exec($sql2);

    echo "SAHDAHDIA JUGA NIH <br>";

    // Redirect to Homepage
    header("Location: http://localhost/projectname/berandasuccess.php");
    echo "New record created successfully";
}catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

?>