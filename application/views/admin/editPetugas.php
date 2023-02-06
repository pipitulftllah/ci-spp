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
            <label>Id Petugas:</label>
            <input type="text" name="id petugas" placeholder="Id Petugas..." value="<?= $petugas['id_petugas'] ?>"/>
        </p>
        <p>
            <label>Nama Petugas:</label>
            <input type="text" name="nama petugas" placeholder="Nama Petugas..." value="<?= $petugas['nama_petugas'] ?>"/>
        </p>
        <p>
            <label>Id Login:</label>
            <input type="text" name="id login" placeholder="ID Login..." value="<?= $petugas['id_login'] ?>"/>
        </p>
        <p>
            <label>Image:</label>
            <input type="text" name="image" placeholder="Image..." value="<?= $petugas['image'] ?>"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit"/>
        </p>
        </fieldset>
    </form>
</body>
</html>