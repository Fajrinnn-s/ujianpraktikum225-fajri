<?php
//Masukkan  file koneksi.php ke file ini
require 'koneksi.php';

//Cek apakah proses dijalankan menggunakan method POST
if($_SERVER ['REQUEST_METHOD'] =="POST") {

$id=$_POST['id'];
$Name=$_POST['name'];
$Description=$_POST['description'];
$Stock=$_POST['stock'];
$Kondisi=$_POST['kondisi'];

//Lakukan Query update ke table karyawan
$query="UPDATE items SET name='$Name',description='$Description',kondisi='$Kondisi' WHERE id =$id";

if(mysqli_query($con,$query)){
//Jika berhasil melakukan  update ke database kembali ke index.php
    echo"<meta http-equiv='refresh' content='1;url=dashboard.php'>";
}else{
    //Jika gagal melakukan update
    echo mysqli_error($con);
    echo "<meta http-equiv='refresh' content='5;url=edit.php?id=$id'>";
}
}
mysqli_close($con);
?>