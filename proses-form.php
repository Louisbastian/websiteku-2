
<?php

include "koneksi.php";
$nama_pelanggan = $koneksi->real_escape_string($_POST['nama_pelanggan']); 
$no_hp = $koneksi->real_escape_string($_POST['no_hp']); 
$alamat = $koneksi->real_escape_string($_POST['alamat']);
$jenis_ayam = $koneksi->real_escape_string($_POST['jenis_ayam']);
$berat_ayam = $koneksi->real_escape_string($_POST['berat_ayam']);
$jumlah_ayam = $koneksi->real_escape_string($_POST['jumlah_ayam']);
$tanggal_pembelian = $koneksi->real_escape_string($_POST['tanggal_pembelian']);


$simpan=$koneksi->query("insert into form(nama_pelanggan,no_hp,alamat,jenis_ayam,berat_ayam,jumlah_ayam,tanggal_pembelian) 
                        values ('$nama_pelanggan', '$no_hp', '$alamat', '$jenis_ayam', '$berat_ayam', '$jumlah_ayam', '$tanggal_pembelian')");

if($simpan==true){

    header("location:form.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>