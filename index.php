<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
</head>
<body>
    <h2>Form Tambah Data Mahasiswa</h2>
    <form action="tambahdata.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>
