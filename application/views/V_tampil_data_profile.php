<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align='center'>
        My Biodata Human
    </h1>
    <center><a href="<?= base_url('kelas/tambah_data_profile') ?>">input data</a></center>

    <table border="1" align= 'center'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Jenjang Pendidikan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($kelas as $p) { ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $p->nama_depan ?></td>
                <td><?= $p->nama_belakang ?></td>
                <td><?= $p->tempat_lahir ?></td>
                <td><?= $p->tanggal_lahir ?></td>
                <td><?= $p->jenis_kelamin ?></td>
                <td><?= $p->alamat ?></td>
                <td><?= $p->jenjang_pendidikan ?></td>
                <td>
                    <a href="<?= base_url('kelas/update_data/'.$p->id_siswa) ?>">Edit</a>
                    <a href="<?= base_url('Kelas/hapus_data/'.$p->id_siswa)?>">Delete</a> 
                </td>   
            </tr>
            <?php $no++; } ?>
        </tbody>
    </table>
</html>
