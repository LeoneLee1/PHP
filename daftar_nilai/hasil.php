<?php
    $matematika = $_POST['matematika'];
    $biologi = $_POST['biologi'];
    $fisika = $_POST['fisika'];
    $kimia = $_POST['kimia'];
    $bhs_indonesia = $_POST['bhs_indonesia'];
    $bhs_inggris = $_POST['bhs_inggris'];

    $rata_rata = ($matematika + $biologi + $fisika + $kimia + $bhs_indonesia + $bhs_inggris) / 6;

    function getGrade($nilai){
        if ($nilai > 90) {
            return "A";
        } elseif ($nilai > 80){
            return "B";
        } elseif ($nilai > 70){
            return "C";
        } elseif ($nilai > 60){
            return "D";
        } elseif ($nilai > 50){
            return "E";
        } else {
            return "F";
        }
        
    }
?>

<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hasil Rata - Rata</title>
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">-->
    </head>
    <body>
        <form action="hasil.php" method = "POST">
            <table border="1">
                <thead style="color : yellow;background-color:blue">
                    <th>Mata Pelajaran</th>
                    <th></th>
                    <th>Angka</th>
                    <th>Huruf</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Matematika</td>
                        <td>:</td>
                        <td><?= $matematika; ?></td>
                        <td><?= getGrade($matematika); ?></td>
                    </tr>
                    <tr>
                        <td>Biologi</td>
                        <td>:</td>
                        <td><?= $biologi; ?></td>
                        <td><?= getGrade($biologi); ?></td>
                    </tr>
                    <tr>
                        <td>Fisika</td>
                        <td>:</td>
                        <td><?= $fisika; ?></td>
                        <td><?= getGrade($fisika); ?></td>
                    </tr>
                    <tr>
                        <td>Kimia</td>
                        <td>:</td>
                        <td><?= $kimia; ?></td>
                        <td><?= getGrade($kimia); ?></td>
                    </tr>
                    <tr>
                        <td>Bhs Indonesia</td>
                        <td>:</td>
                        <td><?= $bhs_indonesia; ?></td>
                        <td><?= getGrade($bhs_indonesia); ?></td>
                    </tr>
                    <tr>
                        <td>Bhs Inggris</td>
                        <td>:</td>
                        <td><?= $bhs_inggris; ?></td>
                        <td><?= getGrade($bhs_inggris); ?></td>
                    </tr>
                    <tr>
                        <td>Nilai Rata - Rata</td>
                        <td>:</td>
                        <td><?= $rata_rata; ?></td>
                        <td><?= getGrade($rata_rata); ?></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <a href="index.php">Kembali</a>
    </body>
</html>