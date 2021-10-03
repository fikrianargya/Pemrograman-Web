<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Silahkan Isi Form di Bawah ini!</h2>
    <table>
        <tr>
            <td>Nama:</td>
            <td><?php echo $_POST['nama']; ?></td>
        </tr>
        <tr>
            <td>NIM:</td>
            <td><?php echo $_POST['ttLahir']; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $_POST['email']; ?></td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir:</td>
            <td><?php echo $_POST['ttLahir']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin:</td>
            <td><?php echo $_POST['jk']; ?></td>
        </tr>
        <tr>
            <td>Angkatan Mahasiswa:</td>
            <td><?php echo $_POST['angkatan_mahasiswa']; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon:</td>
            <td><?php echo $_POST['noTelp']; ?></td>
        </tr>
        <tr>
            <td>Agama:</td>
            <td><?php echo $_POST['agama']; ?></td>
        </tr>
</table>
<h2>Data Orang Tua</h2>
<table>
        <tr>
            <td>Nama Ayah:</td>
            <td><?php echo $_POST['namaAyah']; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon:</td>
            <td><?php echo $_POST['noTelp']; ?></td>
        </tr>
        <tr>
            <td>Nama Ibu:</td>
            <td><?php echo $_POST['namaIbu']; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon:</td>
            <td><?php echo $_POST['noTelp']; ?></td>
        </tr>
</body>
</html>