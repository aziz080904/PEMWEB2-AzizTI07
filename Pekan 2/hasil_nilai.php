<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

//Buat Total Nilai
//nilai_uts + nilai_uas + nilai_tugas : 3
$rata_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

//Buat Perhitungan IF untuk mencari Grade
if ($rata_nilai >= 85){
    $grade = "A";
}
elseif ($rata_nilai >= 70){
    $grade = "B";
}
elseif ($rata_nilai >= 56){
    $grade = "C";
}
elseif ($rata_nilai >= 36){
    $grade = "D";
}
else {
    $grade = "E";
}

//Buat perhitungan SWITCH Case untuk mencari predikat
switch ($grade){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break; 
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Sangat Kurang";
        break;
default:
        
}

//Buat perhitungan IF untuk mencari lulus/gagal
if ($rata_nilai >= 70){
    $status = "LULUS";
}
else {
    $status = "GAGAL";
}

//Cetak Hasil
echo 'Nama: '. $nama;
echo '<br> Mata Kuliah: '. $matkul;
echo '<br> Nilai UTS: '. $nilai_uts;
echo '<br> Nilai UAS: '. $nilai_uas;
echo '<br> Nilai Tugas: '. $nilai_tugas;
echo '<br> Rata - Rata Nilai: '. $rata_nilai;
echo '<br> Grade: '. $grade;
echo '<br> Predikat: '. $predikat;
echo '<br> Status Kelulusan: '. $status;
?>