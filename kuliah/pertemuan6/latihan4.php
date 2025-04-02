<?php 
// array bersarang / nested array
$mahasiswa = [
    [
        'nama' => 'Aditya',
        'npm' => 243040096, 
        'email' => 'prahazaditya@gmail.com',
        'jurusan' =>'Teknik Informatika'
    ],
    [
        'nama' =>'Pablo', 
        'npm' => 243040000, 
        'email' => 'pablo@gmail.com', 
        'jurusan' =>'Teknik Informatika'
    ],
];

echo $mahasiswa[1][2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
    <ul>
        <li>Nama: <?= $m[0]; ?></li>
        <li>NIM: <?= $m[1]; ?></li>
        <li>Email: <?= $m[2]; ?></li>
        <li>Jurusan: <?= $m[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>