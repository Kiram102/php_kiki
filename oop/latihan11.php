<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <center>
            <h3><b>Rapot Siswa</b></h3>
            <form action="proses.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="number" name="kelas" required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan" id="">
                        <option value="RPL">RPL</option>
                        <option value="TBSM">TBSM</option>
                        <option value="TKRO">TKRO</option>
                    </select></td>
                </tr>
            </table>
            <h3><b>Nilai Matematika</b></h3>
            <table>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian_mtk" required></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugas_mtk" required></td>
                </tr>
                <tr>
                    <td>Nilai Uts</td>
                    <td>:</td>
                    <td><input type="number" name="uts_mtk" required></td>
                </tr>
                <tr>
                    <td>Nilai Uas</td>
                    <td>:</td>
                    <td><input type="number" name="uas_mtk" required></td>
                </tr>
            </table>
            <h3><b>Nilai B.indo</b></h3>
            <table>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian_indo" required></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugas_indo" required></td>
                </tr>
                <tr>
                    <td>Nilai Uts</td>
                    <td>:</td>
                    <td><input type="number" name="uts_indo" required></td>
                </tr>
                <tr>
                    <td>Nilai Uas</td>
                    <td>:</td>
                    <td><input type="number" name="uas_indo" required></td>
                </tr>
            </table>
            <h3><b>Nilai B.inggris</b></h3>
            <table>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian_ingris" required></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugas_ingris" required></td>
                </tr>
                <tr>
                    <td>Nilai Uts</td>
                    <td>:</td>
                    <td><input type="number" name="uts_ingris" required></td>
                </tr>
                <tr>
                    <td>Nilai Uas</td>
                    <td>:</td>
                    <td><input type="number" name="uas_ingris" required></td>
                </tr>
            </table>
            <h3><b>Nilai Produktif</b></h3>
            <table>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="harian_pro" required></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tugas_pro" required></td>
                </tr>
                <tr>
                    <td>Nilai Uts</td>
                    <td>:</td>
                    <td><input type="number" name="uts_pro" required></td>
                </tr>
                <tr>
                    <td>Nilai Uas</td>
                    <td>:</td>
                    <td><input type="number" name="uas_pro" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button name="proses">Proses</button>></td>
                </tr>
            </table>
            </form>
        </center>
</body>
</html>