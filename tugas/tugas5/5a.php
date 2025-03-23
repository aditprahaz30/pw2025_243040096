<?php
$mahasiswa = [
    [
        "nama" => "Muhammad Aditya Prahaz",
        "nrp" => "243040096",
        "email" => "prahazaditya@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "0.png"
    ],
    [
        "nama" => "Muhammad Khairan Rozan",
        "nrp" => "243040097",
        "email" => "rozan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.png"
    ],
    [
        "nama" => "Fadlan Fadlurrahman",
        "nrp" => "243040098",
        "email" => "fadlan@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "2.png"
    ],
    [
        "nama" => "Akbar Putra Pamungkas",
        "nrp" => "243040099",
        "email" => "akbar@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "3.png"
    ],
    [
        "nama" => "Muhammad Raihan Nugraha",
        "nrp" => "243040100",
        "email" => "raihan@gmail.com",
        "jurusan" => "Teknologi Pangan",
        "gambar" => "4.png"
    ],
    [
        "nama" => "Ahmad Ramdani",
        "nrp" => "243040101",
        "email" => "ahmad@gmail.com",
        "jurusan" => "Teknologi Pangan",
        "gambar" => "5.png"
    ],
    [
        "nama" => "Hendi Setyawan",
        "nrp" => "243040102",
        "email" => "hendi@gmail.com",
        "jurusan" => "Teknik Lingkungan",
        "gambar" => "6.png"
    ],
    [
        "nama" => "Iqbal Fanza",
        "nrp" => "243040103",
        "email" => "iqbal@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "7.png"
    ],
    [
        "nama" => "Mac Ayres",
        "nrp" => "243040104",
        "email" => "mac@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "8.png"
    ],
    [
        "nama" => "Alex Turner",
        "nrp" => "243040105",
        "email" => "alex@gmail.com",
        "jurusan" => "Teknik Lingkungan",
        "gambar" => "9.png"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <img src="img/<?= $mhs["gambar"]; ?>">
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>