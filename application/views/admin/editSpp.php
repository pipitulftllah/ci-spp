<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <form action="/u" method="POST">
        <fieldset>
        <legend>Registrasi</legend>
        
        <p>
            <label>Nominal:</label>
            <input type="text" name="nominal" placeholder="Nominal..." value="<?= $spp['nominal'] ?>"/>
        </p>
        <p>
            <label>Tahun:</label>
            <input type="text" name="tahun" placeholder="Tahun..." value="<?= $spp['tahun'] ?>" />
        </p>
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
        </fieldset>
    </form>
</body>
</html>