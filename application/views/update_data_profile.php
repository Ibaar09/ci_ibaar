<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM UPDATE DATA PROFILE</h2>
<Form action="<?= base_url('kelas/action_update_data_profile')?>"method="post">
<tr>
    <td><label>Nama Depan</label></td>
    <td>:</td>
    <td>
        <input type="hidden" name="id_siswa" value="<?=$kelas['id_siswa'] ?>">
        <input type="text" name="nama_depan" class="form-control" value="<?=$kelas['nama_depan'] ?>">
    </td>
    <br></br>
</tr>
<tr>
    <td><label>Nama Belakang</label></td>
    <td>:</td>
    <td>
       <input type="text" name="nama_belakang" class="form-control" value="<?=$kelas['nama_belakang'] ?>">
    </td>
    <br></br>
</tr>
<tr>
    <td><label>Tempat Lahir</label></td>
    <td>:</td>
    <td>
        <input type="text" name="tempat_lahir" class="form-control" value="<?=$kelas['tempat_lahir'] ?>">
    </td>
    <br></br>
</tr>
<tr>
    <td><label>Tanggal Lahir</label></td>
    <td>:</td>
    <td>
        <input type="text" name="tanggal_lahir" class="form-control" value="<?=$kelas['tanggal_lahir'] ?>">
    </td>
    <br></br>
</tr>
<tr>
    <td><label>Jenis kelamin</label></td>
    <td>:</td>
    <input type="radio" name="jenis_kelamin" value="L">laki-laki
    <input type="radio" name="jenis_kelamin" value="p">perempuan
    <br></br>
</tr>

<tr>
    <td><label>Alamat</label></td>
    <td>:</td>
    <td><textarea  name="alamat" id="" cols="30" rows="3" value="<?=$kelas['alamat'] ?>"></textarea></td>
    <br></br>
</tr>
    <td><label>Jenjang Pendidikan</label></td>
    <td>:</td>
    <td><input type="text" name="jenjang_pendidikan" class="form-control"></td>
    <br></br>
    
    <button name="simpan">Simpan</button>
</form>
</body>
</html>