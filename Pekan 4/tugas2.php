<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<!-- main.php/index.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tugas</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tugas 2</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika", "BD"=>"Bisnis Digital"];
$ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi", "Lainnya"];
?>



<h3>Form Registrasi IT Club Data Science</h3>
<br>
<form method="POST" action="#">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="jk_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <?php
        foreach ($ar_prodi as $index_prodi => $value_prodi) {
        ?>    
            <option value="<?=$index_prodi?>"><?=$value_prodi ?></option>
       <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill web &amp; programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_2" type="checkbox" class="custom-control-input" value="javascript"> 
        <label for="skill_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_3" type="checkbox" class="custom-control-input" value="rwdbootstrap"> 
        <label for="skill_3" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_5" type="checkbox" class="custom-control-input" value="phyton"> 
        <label for="skill_5" class="custom-control-label">Phyton</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <?php
        foreach ($ar_domisili as $domisili) {
            echo "<option value='$domisili'>$domisili</option>";
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-mail-forward"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>\

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
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Ini hasil Tugas 2
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
<?php
include_once 'footer.php';
?>