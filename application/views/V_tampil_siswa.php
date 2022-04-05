<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <table border="1">
        <thead>
            <tr>
                <th>siswa id</th>
                <th>siswa nisn</th>
                <th>siswa nis</th>
                <th>siswa nama lengkap</th>
                <th>siswa tempat lahir</th>
                <th>siswa tgl lahir</th>
                <th>siswa nohp</th>
            </tr>
        </thead>
<tbody>
            <?php $no = 1; foreach($siswa as $s) { ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $s->siswa_nisn ?></td>
                <td><?= $s->siswa_nis ?></td>
                <td><?= $s->siswa_nama_lengkap ?></td>
                <td><?= $s->siswa_tempat_lahir ?></td>
                <td><?= $s->siswa_tgl_lahir ?></td>
                <td><?= $s->siswa_nohp ?></td>
            </tr>
            <?php $no++; } ?>
</tbody>
    </table>
</html>