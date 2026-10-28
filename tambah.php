<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="tambah.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="box">
<h1>Tambah Data Siswa</h1>

<form method="POST" action="simpan.php">

    NIS :
    <br>
    <input type="text" name="NIS">
    <br><br>

    Nama :
    <br>
    <input type="text" name="NAMA">
    <br><br>

    Kelas :
    <br>
    <select name="KELAS">

        <option value="">-- Pilih Kelas --</option>

        <option value="XI RPL 1">XI RPL 1</option>
        <option value="XI RPL 2">XI RPL 2</option>

        <option value="XI DKV 1">XI DKV 1</option>
        <option value="XI DKV 2">XI DKV 2</option>

        <option value="XI ANM 1">XI ANM 1</option>
        <option value="XI ANM 2">XI ANM 2</option>

    </select>
    <br><br>

    Tanggal Lahir :
    <br>
    <input type="date" name="TANGGAL_LAHIR">
    <br><br>

    <button type="submit">Simpan</button>

</form>
</div>

</body>
</html>