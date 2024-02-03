<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['form_id'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$jenis_ayam=$_POST['jenis_ayam'];
$berat_ayam=$_POST['berat_ayam'];
$jumlah_ayam=$_POST['jumlah_ayam'];
$tanggal_pembelian=$_POST['tanggal_pembelian'];

$ubah=$koneksi->query("update form set nama_pelanggan='$nama_pelanggan', no_hp='$no_hp', alamat='$alamat', jenis_ayam='$jenis_ayam', berat_ayam='$berat_ayam', jumlah_ayam='$jumlah_ayam', tanggal_pembelian='$tanggal_pembelian' where form_id='$id'");

if($ubah==true){

    header("location:tampil-form.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>