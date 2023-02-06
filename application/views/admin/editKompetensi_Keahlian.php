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
            <label>ID Kompetensi Keahlian:</label>
            <input type="text" name="id kompetensi keahlian" placeholder="ID Kompetensi Keahlian..." value="<?= $kompetensi_keahlian['id_kk'] ?>"/>
        </p>
        <p>
            <label>Nama Kompetensi:</label>
            <input type="text" name="nama kompetensi" placeholder="Nama Kompetensi..." value="<?= $kompetensi_keahlian['nama_kk'] ?>"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
        </fieldset>
    </form>
</body>
</html>