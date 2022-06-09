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

    // ganti dari POST ke FILES
    $syarat_file=$_FILES['afile']['name'];
    $datadiri_file=$_FILES['pdatafile']['name'];
    $resume_file=$_FILES['rfile']['name'];

    $syarat_file_temp=$_FILES['afile']['tmp_name'];
    $datadiri_file_tmp=$_FILES['pdatafile']['tmp_name'];
    $resume_file_tmp=$_FILES['rfile']['tmp_name'];

    //pathnya itu contoh syarat/gambar_syarat.jpg
    move_uploaded_file($syarat_file_temp, "syarat/".$syarat_file);
    move_uploaded_file($datadiri_file_tmp, "syarat/".$datadiri_file);
    move_uploaded_file($resume_file_tmp, "syarat/".$resume_file);

    //nanti nama filenya disimpen di table misal di table pelamartb ditambah kolom image_path varchar 255
    //nama filenya itu $syarat_file dll

    //$datadiri_file=$_POST['pdatafile'];
    //$tambahan_file=$_POST['afile'];

    //$syarat_file=$_POST['afile'];
    //$datadiri_file=$_POST['pdatafile'];
    //$resume_file=$_POST['rfile'];

    $no_telepon=$_POST['notelepon'];
    $username=$_POST['username'];
    $provinsi=$_POST['provinsi']; //provinsi
    $perusahaan_birojasa=$_POST['perusahaanbiro']; //perusahaanbiro
    $no_rekening=$_POST['norekening']; // tambah rekening, tapi masuk database pembayaran

    $target_dir = "syarat/";
    $syarat_file = $target_dir . basename($_FILES["afile"]["name"]);
    $datadiri_file= $target_dir . basename($_FILES["pdatafile"]["name"]);
    $resume_file= $target_dir . basename($_FILES["rfile"]["name"]);

    //$uploadOk = 1;
    //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // cari path lokasinya kalo file, di link + youtube dari kevin
    $sql1="INSERT INTO pelamartb(username,resume_file,datadiri_file,tambahan_file,no_telepon,provinsi,perusahaan_birojasa)
    VALUES ('alinastarkov','$syarat_file','$datadiri_file','$resume_file',$no_telepon,'$provinsi','$perusahaan_birojasa')";

    //$sql1="INSERT INTO pelamartb(username,resume_file,datadiri_file,tambahan_file,no_telepon,provinsi,perusahaan_birojasa)
    //VALUES ('alinastarkov','$syarat_file_temp','$datadiri_file_tmp','$resume_file_tmp',$no_telepon,$provinsi,$perusahaan_birojasa)";

    //VALUES ('test','test','test',$no_telepon,$provinsi,$perusahaan_birojasa)";

    //VALUES ('C:\Document\logocard.png',$datadiri_file,$resume_file,$no_telepon,$provinsi,$perusahaan_birojasa)";
    //VALUES ($resume_file,$datadiri_file,$resume_file,$no_telepon,$provinsi,$perusahaan_birojasa)";

    $sql2="INSERT INTO pembayarantb(username,no_rekening)
    VALUES ('alinastarkov',$no_rekening)";

    // use exec() because no results are returned
    $conn->exec($sql1);
    $conn->exec($sql2);

    // Redirect to Homepage
    header("Location: http://localhost/projectname/berandasuccess.php");
    echo "New record created successfully";
}catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
