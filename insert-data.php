<?php 
    include "koneksi.php";

    $sql = "INSERT INTO user 
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    ) VALUE 
    (
        '1',
        'Alif Nandar Lesmana',
        'UI Designer',
        'Full Time',
        '17',
        'Jakarta Pusat',
        '5',
        'user@gmail.com'
    )";

    if($koneksi->query($sql) ==TRUE){
        echo "Insert data telah berhasil";
    } else {
        echo "Insert data gagal";
    }
?>