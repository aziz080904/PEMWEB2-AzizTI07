<?php
//looping dengan for
//pengulangan angka dari 1-10
for($x = 1; $x <= 10; $x = $x + 1){
    echo "<br> $x";
}

//pengulangan angka dari 10-1
for($y = 10; $y >= 1; $y = $y - 1){
    echo "<br> $y";
}

?>

<form action="">
    Jumlah Massa Aksi:
    <?php
    for($massa = 1; $massa <= 100; $massa = $massa + 1){
        echo "<br> <input type='radio' name='jml_massa value='$massa'>" . $massa;
    }

    ?>
</form>