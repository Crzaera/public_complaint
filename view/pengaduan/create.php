<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    <form action="../../MasyarakatController.php" method="POST">
        <label for="nik">NIK</label>
        <input type="text" name="nik" id="nik" required>
        <label for="isi">Laporan</label>
        <input type="text" name="isi" id="isi" required>
        <label for="foto">Foto</label>
        <input type="text" name="foto" id="foto" required>

        <input type="submit" name="register" value="Tambah">
    </form>
</body>
</html>