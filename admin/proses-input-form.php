<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama_pelanggan=$_POST['nama_pelanggan'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$jenis_ayam=$_POST['jenis_ayam'];
$berat_ayam=$_POST['berat_ayam'];
$jumlah_ayam=$_POST['jumlah_ayam'];
$tanggal_pembelian=$_POST['tanggal_pembelian'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into form(nama_pelanggan,no_hp,alamat,jenis_ayam,berat_ayam,jumlah_ayam,tanggal_pembelian) 
                        values ('$nama_pelanggan', '$no_hp', '$alamat', '$jenis_ayam', '$berat_ayam', '$jumlah_ayam', '$tanggal_pembelian')");

if($simpan==true){

    header("location:tampil-form.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>