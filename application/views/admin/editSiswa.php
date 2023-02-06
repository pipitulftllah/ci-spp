<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <form action="contact.php" method="POST">
        <fieldset>
        <legend>Registrasi</legend>
        <p>
            <label>NISN:</label>
            <input type="text" name="nisn" placeholder="NISN..." value="<?= $siswa['nisn'] ?>"/>
        </p>
        <p>
            <label>NIS:</label>
            <input type="text" name="nis" placeholder="NIS..." value="<?= $siswa['nis'] ?>" />
        </p>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama..." value="<?= $siswa['nama'] ?>" />
        </p>
        <p>
            <label>ID KELAS:</label>
            <input type="text" name="id kelas" placeholder="ID KELAS..." value="<?= $siswa['id_kelas'] ?>"/>
        </p>
        <p>
            <label>Alamat:</label>
            <input type="text" name="alamat" placeholder="Alamat..." value="<?= $siswa['alamat'] ?>"/>
        </p>
        <p>
            <label>No Telepon:</label>
            <input type="text" name="no telepon" placeholder="No Telepon..." value="<?= $siswa['no_telp'] ?>"/>
        </p>
        <p>
            <label>Id spp :</label>
            <input type="text" name="id spp" placeholder="Id spp..." value="<?= $siswa['id_spp'] ?>"/>
        </p>
        <p>
            <label>Id Login:</label>
            <input type="text" name="id login" placeholder="Id Login..." value="<?= $siswa['id_login'] ?>"/>
        </p>
        <p>
            <label>Image:</label>
            <input type="text" name="image" placeholder="Image..." value="<?= $siswa['image'] ?>"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
        </fieldset>
    </form>
</body>
</html>