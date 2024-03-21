<?php
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $index_prodi = $_POST['prodi'];
  $skill = $_POST['skill'];
  $total_skor = 0;
  $domisili = $_POST['domisili'];
  $email = $_POST['email'];

  echo "<h2>Output:</h2>";
  echo "NIM: $nim <br>";
  echo "Nama: $nama <br>";
  echo "Jenis kelamin: $jk <br>";
  echo "Program Studi: $index_prodi <br>";
  echo "Skill: ";
  foreach ($skill as $value) {
      echo "$value, ";

 
  switch ($value) {
    case 'html':
      $total_skor += 10;
        break;
    case 'css':
      $total_skor += 10;
        break;
    case 'javascript':
      $total_skor += 20;
        break;
    case 'rwdbootstrap':
      $total_skor += 20;
        break;
    case 'php':
      $total_skor += 30;
        break;  
    case 'phyton':
      $total_skor += 30;
        break;
    case 'java':
      $total_skor += 50;
        break;
    default:
        break;
      }
  }
  echo "<br>";
  echo "Total Skor Skill: $total_skor <br>";


  function kategori_skor($skor) {
    if ($skor == 0) {
        return "Tidak Memadai";
    } elseif ($skor <= 40) {
        return "Kurang";
    } elseif ($skor <= 60) {
        return "Cukup";
    } elseif ($skor <= 100) {
        return "Baik";
    } elseif ($skor <= 150) {
        return "Sangat Baik";
    } else {
        return "Nilai tidak valid";
    }
  }
  echo "Kategori Skor: " . kategori_skor($total_skor);
  echo "<br>";
  echo "Domisili: $domisili <br>";
  echo "Email: $email <br>";
?>
