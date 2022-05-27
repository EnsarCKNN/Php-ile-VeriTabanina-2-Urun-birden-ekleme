<?php
$servername = "localhost";
$username = "root";//Veri Tabanının kullanıcı Adı'nı Gir
$password = "";//Veri Tabanının Şifre'sini Adını Gir

try {
  $conn = new PDO("mysql:host=$servername;dbname=php", $username, $password); // dbname= ? buraya veri tabanının ismini giriniz
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Bağlantı Başarılı";
} catch(PDOException $e) {
  echo "Bağlantı Kurulamadı: " . $e->getMessage();
}
?>