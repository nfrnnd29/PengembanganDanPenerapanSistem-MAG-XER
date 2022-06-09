<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magandxerdb";
// Connect to DB 🔫

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO pelamartb(no_telepon,provinsi,perusahaan_birojasa,resume_file,datadiri_file,tambahan_file)
    VALUES ('01238123',1,2,'aaaa','aaaa','aaaa')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
?>