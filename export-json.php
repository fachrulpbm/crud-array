<?php

    // deklarasi array mahasiswa
    $mahasiswa = array();

    // variable dengan format JSON yang berisi array mahasiswa
    $json = json_encode($mahasiswa, JSON_PRETTY_PRINT);

    // export variable json menjadi file mahasiswa.json
    file_put_contents('mahasiswa.json', $json);


?>