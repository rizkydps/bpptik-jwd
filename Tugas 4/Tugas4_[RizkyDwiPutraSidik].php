<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
</head>

<body>
    <form action="" method="post">
        Jumlah Bintang =<input type="number" name="angka" id="">
        <br>
        <input type="submit" name="kirim" value="Kirim">
        <br>
    </form>
    <?php
    if ($_POST['angka']) {

        $bintang = $_POST['angka'];
        for ($x = 1; $x  <= $bintang; ++$x) {
            for ($y = 1; $y <= $x; ++$y) {
                echo "*";
            }
            echo "<br/>";
        }
    }


    ?>
</body>

</html>