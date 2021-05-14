<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<title>TUGAS</title> 
</head> 
<body> 
<h2>Tugas PHP</h2> 
<form method="post"> 
<label>Nama: </label> <input type="text" name="nama"><br>
<label>Tanggal Lahir: </label> <input type="text" name="tanggal_lahir"><br>
<label for="pekerjaan">Pekerjaan</label>                    
                    <select type="text" name="pekerjaan" id="pekerjaan" multiple="multiple" cols="20">
                        <option value="pilot" selected="selected">Pilot</option>
                        <option value="masinis">Masinis</option>
                        <option value="guru">Guru</option>
                        <option value="dosen">Dosen</option>
                        <option value="dokter">Dokter </option>
                        <option value="perawat">Perawat</option>
                    </select><br>
<input type="submit" value="Kirim"> 
</form> 

<?php 
echo 'Selamat Datang : ' . $_POST['nama'];
?> 
<br>
<?php
    $tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) { 
    $thn = "0";
    $bln = "0";
    $tgl = "0";
    }
    $thn = $sekarang->diff($tanggal_lahir)->y;
    $bln = $sekarang->diff($tanggal_lahir)->m;
    $tgl = $sekarang->diff($tanggal_lahir)->d;
    echo "Umur anda adalah : ";
    echo $thn." tahun ".$bln." bulan ".$tgl." hari";
?>
<br>
<?php 
$kerja = $_POST['pekerjaan'];
echo "Pekerjaan dan gaji anda adalah : " .$kerja. " ";
switch ($kerja) { 
    case "pilot": 
        echo "Rp. 50000000"; 
        break; 
    case "masinis": 
        echo "Rp. 40000000"; 
        break;
    case "guru": 
        echo "Rp. 30000000"; 
        break;
    case "dosen": 
        echo "Rp. 60000000"; 
        break;
    case "dokter": 
        echo "Rp. 20000000"; 
        break; 
    default:
        echo "Rp. 10000000";
    } 
    
?>

</body> 
</html>