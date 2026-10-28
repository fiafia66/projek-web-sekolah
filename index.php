<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<h1>BIODATA SISWA</h1>

<a class="btn-tambah" href="tambah.php">
    <i class="fa-solid fa-plus"></i> Tambah Data
</a>

<br><br>

<table border="2" cellpadding="10" width=100%>
    <tr>
        <th>NIS</th>
        <th>NAMA SISWA</th>
        <th>KELAS</th>
        <th>TANGGAL LAHIR</th>
        <th>Aksi</th>
    </tr>
    
<?php

$no = 1;
$data = mysqli_query($conn, "SELECT * FROM siswa");

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?php echo $d['NIS']; ?></td>
    <td width=70%><?php echo $d['NAMA']; ?></td>
    <td><?php echo $d['KELAS']; ?></td>
    <td><?php echo $d['TANGGAL_LAHIR']; ?></td>
    <td>

        <a class="btn-edit" href="edit.php?NIS=<?php echo $d['NIS']; ?>" onclick="return confirm('Yakin ingin mengubah data ini?');">
            <i class="fa-solid fa-pen-to-square"></i>
        </a>

        <a class="btn-hapus" href="hapus.php?NIS=<?php echo $d['NIS']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">
            <i class="fa-solid fa-trash"></i>
        </a>

    </td>
</tr>

<?php
}
?>

</table>

</body>
</html>