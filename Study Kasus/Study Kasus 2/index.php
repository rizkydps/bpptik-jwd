<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Kasus 2</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
        }

        th {
            background-color: #0f50ca;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Tabel Pembelian Barang</h1>
    <?php

    ?>
    <table>
        <tr>

            <?php
            $head = ['No', 'Gambar', 'Nama Barang', 'Harga', 'Stok', 'Total Harga'];
            foreach ($head as $heb) {
                echo "<th>" . $heb . "</th>";
            }
            ?>
        </tr>
        <tr>
            <?php
            


            $head1 = ['No' => 1, 'Gambar' => "img", 'Nama Barang' => "Barang A", 'Harga' => 12000, 'Stok' => 2, 'Total Harga' => 240000];

            foreach ($head1 as $he) {
                echo "<td>" . $he . "</td>";
            }
            ?>
        </tr>
        <tr>
            <?php
            


            $head2 = ['No' => 2, 'Gambar' => "img", 'Nama Barang' => "Barang B", 'Harga' => 50000, 'Stok' => 6, 'Total Harga' => 300000];

            foreach ($head2 as $he) {
                echo "<td>" . $he . "</td>";
            }
            ?>
        </tr>
        <tr>
            <?php
            // col 3


            $head3 = ['No' => 3, 'Gambar' => "img", 'Nama Barang' => "Barang C", 'Harga' => 70000, 'Stok' => 12, 'Total Harga' => 840000];

            foreach ($head3 as $he) {
                echo "<td>" . $he . "</td>";
            }
            ?>
        </tr>
        <tr>
            <?php
            // col 4


            $head4 = ['No' => 4, 'Gambar' => "img", 'Nama Barang' => "Barang D", 'Harga' => 25000, 'Stok' => 4, 'Total Harga' => 1000000];

            foreach ($head4 as $he) {
                echo "<td>" . $he . "</td>";
            }
            ?>
        </tr>
        <tr>
            <td colspan="5" class="text-center">Jumlah Harga Barang</td>
            <td colspan="1"><?php echo $head1["Total Harga"]  + $head2["Total Harga"] + $head3["Total Harga"] + $head4["Total Harga"] ?> </td>
        </tr>
    </table>
</body>

</html>
