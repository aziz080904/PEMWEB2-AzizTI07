<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika", "BD"=>"Bisnis Digital"];
$ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi", "Lainnya"];
?>



<h3>Form Registrasi IT Club Data Science</h3>
<br>
<form method="POST" action="tugas_proses_registrasi.php">
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
</form>
