<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM TAMBAH DATA</h2>
<Form action="<?= base_url('kelas/action_tambah_data')?>"method="post">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" placeholder="Masukan Nama Lengkap">
    <br></br>
    <label>Nama Alamat</label>
    <input type="text" name="alamat" placeholder="Masukan Nama Alamat">
    <br></br>
    <label>No Hp</label>
    <input type="number" name="no_hp" placeholder="Masukan no_hp">
    <br></br>
    <label>Nama Email</label>
    <input type="email" name="email" placeholder="Masukan Nama Email">
    <br></br>
    <label>Nama Sekolah</label>
    <input type="text" name="sekolah" placeholder="Masukan Nama Sekolah">
    <br></br>
    <label>Nama Idola</label>
    <input type="text" name="idola" placeholder="Masukan Nama Idola">
    <br></br>
    
    <button name="simpan">Simpan</button>
</form>
</body>
</html>