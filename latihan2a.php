<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1a</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>Kolom 1</th>
            <th>Kolom 2</th>
            <th>Kolom 3</th>
            <th>Kolom 4</th>
            <th>Kolom 5</th>
        </tr>

        <?php
        $jumlahBaris = 15;
        $jumlahKolom = 5;

        for ($baris = 1; $baris <= $jumlahBaris; $baris++) {
            echo "<tr>";
            for ($kolom = 1; $kolom <= $jumlahKolom; $kolom++) {
                echo "<td>Baris $baris Kolom $kolom</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>