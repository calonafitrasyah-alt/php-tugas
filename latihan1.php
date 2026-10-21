<?php
$nim = "250030624";
$nama = "calona fitraasyah";
$kodeJurusan = "SI";
$angkatan = 2025;
$umur = 19;
$gender = "Laki-laki";
$hobi = ["Badminton"];

echo "Biodata Mahasiswa<br>";
echo "NIM: $nim<br>";
echo "Nama: $nama<br>";
echo "Kode Jurusan: $kodeJurusan<br>";
echo "Angkatan: $angkatan<br>";
echo "Umur: $umur tahun<br>";
echo "Gender: $gender<br>";
echo "Hobi: " . implode(", ", $hobi);
?>