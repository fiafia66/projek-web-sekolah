<?php
include 'koneksi.php';

$NIS = $_GET['NIS'];

$data = mysqli_query($conn, "SELECT * FROM siswa WHERE NIS='$NIS'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="edit.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="box">
<h1>Edit Data Siswa</h1>

<form method="POST" action="update.php">
    
    <input type="hidden" name="NIS" value="<?php echo $d['NIS']; ?>">
    
    Nama :
    <br>
    <input type="text" name="NAMA" value="<?php echo $d['NAMA']; ?>">
    <br><br>
    
    Kelas :
    <br>
    <select name="KELAS">
        
    <option value="XI RPL 1"
    <?php if($d['KELAS']=="XI RPL 1") echo "selected"; ?>>
    XI RPL 1
    </option>

    <option value="XI RPL 2"
    <?php if($d['KELAS']=="XI RPL 2") echo "selected"; ?>>
    XI RPL 2
    </option>

    <option value="XI DKV 1"
    <?php if($d['KELAS']=="XI DKV 1") echo "selected"; ?>>
    XI DKV 1
    </option>

    <option value="XI DKV 2"
    <?php if($d['KELAS']=="XI DKV 2") echo "selected"; ?>>
    XI DKV 2
    </option>

    <option value="XI ANM 1"
    <?php if($d['KELAS']=="XI ANM 1") echo "selected"; ?>>
    XI ANM 1
    </option>

    <option value="XI ANM 2"
    <?php if($d['KELAS']=="XI ANM 2") echo "selected"; ?>>
    XI ANM 2
    </option>

    <select>
    <br><br>

    Tanggal Lahir :
    <br>
    <input type="date" name="TANGGAL_LAHIR" value="<?php echo $d['TANGGAL_LAHIR']; ?>">
    <br><br>

    <button type="submit">Update</button>

</form>
</div>

</body>
</html>