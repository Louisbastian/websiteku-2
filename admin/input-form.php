<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-form.php" method="POST">


                  <div class="form-group">
                        <label for="nama_pelanggan">Nama</label>
                        <input type="text" name="nama_pelanggan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">Nomor Telepon</label>
                        <input type="text" name="no_hp" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="jenis_ayam">Jenis Ayam</label>
                        <select name="jenis_ayam" class="form-control">
                            <option value="Ayam Kampung">Ayam Kampung</option>
                            <option value="Ayam Broiler">Ayam Broiler</option>
                            <option value="Ayam Broiler">Ayam Petelur</option>
                            <option value="Ayam Broiler">Ayam Hias</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="berat_ayam">Berat Ayam</label>
                        <input type="text" name="berat_ayam" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="jumlah_ayam">Jumlah Ayam</label>
                        <input type="text" name="jumlah_ayam" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="tanggal_pembelian">Tanggal Pembelian</label>
                        <input type="date" name="tanggal_pembelian" class="form-control">
                    </div>


                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>