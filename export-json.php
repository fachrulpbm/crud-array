<?php

    $mahasiswa = array(
        array(
            'nim' => 123,
            'nama' => 'Udin'
        ),
        array(
            'nim' => 124,
            'nama' => 'Joko'
        )
    );

    // variable yang berisi format JSON
    $json = json_encode($mahasiswa, JSON_PRETTY_PRINT);

    // export file JSON mahasiswa
    file_put_contents('mahasiswa.json', $json);


?>