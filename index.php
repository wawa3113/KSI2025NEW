<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nim  = $_POST['nim'];

    $query = "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')";
    $hasil = mysqli_query($conn, $query);

    if ($hasil) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>
