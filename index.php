<?php

    // periksa apakah file mahasiswa.json sudah ada
    if(file_exists('mahasiswa.json')){
        // Jika YA, maka baca file json
        $mahasiswa = file_get_contents('mahasiswa.json');
    }else{
        // Jika TIDAK, maka eksekusi file export-json.php
        include_once('export-json.php');
    }

    // decode variable json
    $mhs = json_decode($mahasiswa, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>

    <form action="index.php" method="post">
        <table border=0>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input type="text" name="txtNim">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="txtNama">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submitMhs" value="Simpan">
                </td>
            </tr>
        </table>
    </form>

    <?php
        if (isset($_POST['submitMhs'])) {

            $el = sizeof($mhs);
            $mhs[$el]['nim'] = intval($_POST['txtNim']);
            $mhs[$el]['nama'] = $_POST['txtNama'];
            
            // encode ke JSON
            $json = json_encode($mhs, JSON_PRETTY_PRINT);

            // simpan ke file JSON
            file_put_contents('mahasiswa.json',$json);
        }
    ?>
    
</body>
</html>