<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";
?>


<?php
$mhs1 = ['id'=>1, 'NIM'=>011024, 'UTS'=>90, 'UAS'=>95, 'TUGAS'=>99];
$mhs2 = ['id'=>2, 'NIM'=>011022, 'UTS'=>70, 'UAS'=>80, 'TUGAS'=>80];
$mhs3 = ['id'=>3, 'NIM'=>011022, 'UTS'=>10, 'UAS'=>75, 'TUGAS'=>80];
$nilai_akhir =
$ar_nilai = [$mhs1, $mhs2, $mhs3];
?>
 
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
 </head>
 <body>
    <div class="container">
        <h2>Data Mahasiswa STT-NF</h2>
        <table class="table table-stripad">
            <tr>
                <th>Nomor</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
                <th>RATA RATA</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){
                $nilai_akhir = ($nilai['UTS'] + $nilai['UAS'] + $nilai['TUGAS'])/3;?>
            <tr>
                <td><?=$nilai['id'];?></td>
                <td><?=$nilai['NIM'];?></td>
                <td><?=$nilai['UTS'];?></td>
                <td><?=$nilai['UAS'];?></td>
                <td><?=$nilai['TUGAS'];?></td>
                <td><?= number_format($nilai_akhir, 1, '.', ','); ?></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>