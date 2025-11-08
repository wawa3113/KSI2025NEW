<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
  $nama = $_POST['nama'];
  mysqli_query($koneksi, "INSERT INTO mahasiswa (nama) VALUES ('$nama')");
  echo 'Data berhasil ditambahkan';
}
?>
<form method='POST'>
  <input type='text' name='nama' placeholder='Masukkan nama'>
  <input type='submit' name='simpan' value='Simpan'>
</form>
