<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <table class="table text-oppercase table-bordered">
            <tr class="table-primary">
                <th>nama</th>
                <th>mata kuliah</th>
                <th>tugas</th>
                <th>uts</th>
                <th>uas</th>
                <th>total nilai</th>
                <th>keterangan</th>
            </tr>
            <?php
            require_once "proses_hasil.php";
            ?>
            <tr>
                <td><?=$nama;?></td>
                <td><?=$matkul;?></td>
                <td><?=$TUGAS;?></td>
                <td><?=$UTS;?></td>
                <td><?=$UAS;?></td>
                <td><?=$total_nilai;?></td>
                <td><?=$keterangan;?></td>
            </tr>
        </table>
    </div>
</body>
</html>