<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator sederhana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    if (isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1+$bil2;
                break;
            case 'kurang':
                $hasil = $bil1-$bil2;
                break;
            case 'kali':
                $hasil = $bil1*$bil2;
                break; 
            case 'bagi':
                $hasil = $bil1/$bil2;
                break;               
        }
    }   
    ?>
    <div class="kalkulator">
        <h2 class="judul">Kalkulator</h2>
        <form method="post" action="index.php">
            <center>
            <input type="text" name="bil1" class="bil1" autocomplete="off"
            placeholder="0">
            <div>
            <input type="text" name="bil2" class="bil2" autocomplete="off"
            placeholder="0">
            </center>
</div>
            <select class="opt" name="operasi">
                <option value="tambah"></option>
                <option value="tambah">+</option> 
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>        
            </select>
            <input type="submit" name="hitung" value="Jumlah" class="tombol">

        </form>
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php }else{ ?>
            <input type="text" value="-" class="bil">
        <?php } ?>
        </div>
</body>
</html>