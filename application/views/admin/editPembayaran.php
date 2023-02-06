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
            <label>Id Pembayaran:</label>
            <input type="text" name="id pembayaran" placeholder="Id Pembayaran..." value="<?= $pembayaran['id_pembayaran'] ?>"/>
        </p>
        <p>
            <label>Id Petugas:</label>
            <input type="text" name="id petugas" placeholder="Id Petugas..." value="<?= $pembayaran['id_petugas'] ?>"/>
        </p>
        <p>
            <label>NISN:</label>
            <input type="text" name="nisn" placeholder="NISN..." value="<?= $pembayaran['nisn'] ?>"/>
        </p>
        <p>
            <label>Tanggal Bayar:</label>
            <input type="text" name="tanggal bayar" placeholder="Tanggal Bayar..." value="<?= $pembayaran['tgl_bayar'] ?>"/>
        </p>
        <p>
            <label>Bulan Dibayar:</label>
            <input type="text" name="bulan dibayar" placeholder="Bulan Dibayar..." value="<?= $pembayaran['bulan_dibayar'] ?>"/>
        </p>
        <p>
            <label>Tahun Dibayar:</label>
            <input type="text" name="tahun dibayar" placeholder="Tahun Dibayar..." value="<?= $pembayaran['tahun_dibayar'] ?>"/>
        </p>
        <p>
            <label>Id spp:</label>
            <input type="text" name="id spp" placeholder="Id spp..." value="<?= $pembayaran['id_spp'] ?>"/>
        </p>
        <p>
            <label>Jumlah Bayar:</label>
            <input type="text" name="jumlah bayar" placeholder="Jumlah Bayar..." value="<?= $pembayaran['jumlah_bayar'] ?>"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
        </fieldset>
    </form>
</body>
</html>