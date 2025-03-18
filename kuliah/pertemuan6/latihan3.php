<?php 
// array bersarang / nested array
$mahasiswa = ['Aditya', 243040096, 'prahazaditya@gmail.com', 'Teknik Informatika'];
$mahasiswa2 = ['Escobar', 24340000, '@gmail.com', 'Teknik Informatika'];

$mahasiswa = [
    ['Aditya', 243040096, 'prahazaditya@gmail.com','Teknik Informatika'],
    ['Escobar', 243040000, 'escobar@gmail.com',"Teknik Informatika"]
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