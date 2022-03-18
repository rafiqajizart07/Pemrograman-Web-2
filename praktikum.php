<!DOCTYPE html>
<html lang=id>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet">
        <title>Praktikum data siswa</title>
    </head>
<body>
    <?php
    $ns1 = ['id'=>1,'nim'=>'0110121333','uts'=>80,'uas'=>90,'tugas'=>75];
    $ns2 = ['id'=>2,'nim'=>'0110121444','uts'=>85,'uas'=>80,'tugas'=>90];
    $ns3 = ['id'=>3,'nim'=>'0110121555','uts'=>75,'uas'=>85,'tugas'=>80];
    $ns4 = ['id'=>4,'nim'=>'0110121666','uts'=>90,'uas'=>75,'tugas'=>85];
    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
    ?>
    <h3 stlyle="text-center">Daftar Nilai Siswa</h3>
    <table class="table text-center table-primary" border="1" width="100%">
    <thead>
    <tr>
    <th>No</th><th>NIM</th><th>UTS</th>
    <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    foreach($ar_nilai as $ns){
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$ns['nim'].'</td>';
        echo '<td>'.$ns['uts'].'</td>';
        echo '<td>'.$ns['uas'].'</td>';
        echo '<td>'.$ns['tugas'].'</td>';
        $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
        $nomor++;
    }
    ?>
    </tbody> 
    </table>
</body>
</html>