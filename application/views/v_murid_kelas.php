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
    <center><a href="<?= base_url('kelas/tambah_data') ?>">input data</a></center>

    <table border="1" width="50%" align='center'>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nm ?></td>

        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $almt ?></td>

        </tr>

        <tr>
            <td>No hp</td>
            <td>:</td>
            <td><?= $no_hp ?></td>

        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $email ?></td>

        </tr>

        <tr>
            <td>sekolah</td>
            <td>:</td>
            <td><?= $skl ?></td>

        </tr>

        <tr>
            <td>Idola</td>
            <td>:</td>
            <td><?= $idl ?></td>

        </tr>

    </table>
</body>
</html>