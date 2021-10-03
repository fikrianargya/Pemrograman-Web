<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pmb</title>
</head>
<body>
    <h2>Silahkan Isi Form di Bawah ini!</h2>
    <form method="POST" action="konfirmasipmb.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir</td>
                <td><input type="date" name="ttLahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jk" value="Laki-laki">laki-laki
                <input type="radio" name="jk" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Angkatan Mahasiswa</td>
                <td><select name="angkatan_mahasiswa" id="">
                     <option value="2011">2011</option>
                     <option value="2012">2012</option>
                     <option value="2013">2013</option>
                     <option value="2014">2014</option>
                     <option value="2015">2015</option>
                     <option value="2016">2016</option>
                     <option value="2017">2017</option>
                     <option value="2018">2018</option>
                     <option value="2019">2019</option>
                     <option value="2020">2020</option>
                     <option value="2021">2021</option>
                </select></td>
            </tr>
            <tr>
                <td>Nomor telepon</td>
                <td><input type="text" name="noTelp"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama"></td>
            </tr>
        </table>
        <h2>Data Orang Tua</h2>
        <table>
            <tr>
                <td>Nama Ayah</td>
                <td><input type="text" name="namaAyah"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="text" name="noTelp"></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td><input type="text" name="namaIbu"></td>
            </tr>
            <tr>
                <td>Nomor telepon</td>
                <td><input type="text" name="noTelp"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit" value="submit">Submit</td>
            </tr>
        </table>
    </form>
</body>
</html>