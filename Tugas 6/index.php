<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    // FUngsi penjumlahan
    function functionPenambahan($x, $y)
    {
        $HasilPenambahan = $x + $y;
        return $HasilPenambahan;
    }
    // FUngsi Perkalian
    function functionPerkalian($x, $y)
    {
        $HasilPerkalian = $x * $y;
        return $HasilPerkalian;
    }
    // Fungsi Pengurangan
    function functionPengurangan($x, $y)
    {
        $HasilPengurangan = $x - $y;
        return $HasilPengurangan;
    }
    // Fungsi Pembagian
    function functionPembagian($x, $y)
    {
        $HasilPembagian = $x / $y;
        return $HasilPembagian;
    }

    ?>
    <h1 class="text-center">Kalkulator Sederhana</h1>
    <div class="container">
        <form action="" method="get">
            <h4>Bilangan 1</h4>
            <input type="number" name="bilangan1" id="">
            <br>
            <h4>Bilangan 2</h4>
            <input type="number" name="bilangan2">
            <br>
            <br>
            <input class="buttonHasil" type="submit" name="hasil" value="hasil">
        </form>
        <?php
        if (isset($_GET['hasil'])) :
            $x = $_GET['bilangan1'];
            $y = $_GET['bilangan2'];

        ?>
            <br />
            <br />
            <br />
            <div class="kotak">
                <tr>
                    <td>Hasil Penambahan </td>
                    <td>: </td>
                    <td> <?= functionPenambahan($x, $y) .  "<br/>"; ?> </td>
                </tr>
                <tr>
                    <td>Hasil Perkalian </td>
                    <td>: </td>
                    <td><?= functionPerkalian($x, $y) .  "<br/>"; ?></td>
                </tr>
                <tr>
                    <td>Hasil Pengurangan</td>
                    <td>: </td>
                    <td><?= functionPengurangan($x, $y) .  "<br/>"; ?></td>
                </tr>
                <tr>
                    <td>Hasil Pembagian </td>
                    <td>: </td>
                    <td><?= functionPembagian($x, $y); ?></td>
                </tr>
            <?php endif; ?>
            </div>
    </div>
</body>

</html>