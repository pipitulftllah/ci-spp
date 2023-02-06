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
            <label>Nama Kelas:</label>
            <input type="text" name="nama kelas" placeholder="Nama Kelas..." value="<?= $kelas['nama_kelas'] ?>"/>
        </p>
        <p>
            <label>Id Kompetensi Keahlian:</label>
            <input type="text" name="id kompetensi kehlian" placeholder="Id Kompetensi Keahlian..." value="<?= $kelas['id_kk'] ?>"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
        </fieldset>
    </form>
</body>
</html>