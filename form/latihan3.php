<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <center>
            <img src="smk.png" alt="" height="150px" width="200px">
            <h2>Form Biodata Diri</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="" required></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>z
                    <td><input type="text" name="lahir" value="" required id="rupiah"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" value="" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="checkbox" name="kelamin" value="Laki-Laki">Laki-Laki
                        <input type="checkbox" name="kelamin" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="25%" rows="5%"></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan" id="">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="">
                            <option value="Menikah">Menikah</option>
                            <option value="Bujang">Bujang</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type="checkbox" name="hobi" value="Membaca">Membaca
                        <input type="checkbox" name="hobi" value="Menulis">Menulis
                        <input type="checkbox" name="hobi" value="Ngepus">Ngepus
                    </td>
                </tr>
                <tr>
                    <td>Cita-Cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita" id="">
                            <option value="Progamer">Progamer</option>
                            <option value="Kuli">Kuli</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-Kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="bijak" id="" cols="25%" rows="5%"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="KIRIM" name="kirim"></td>
                </tr>
            </table>
        </center>
    </form>
    <script type="text/javascript">
        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function(e) {
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        })

        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 100,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d(100)/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
</body>

</html>

<?php
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $lahir = $_POST['lahir'];
    $tanggal = $_POST['tanggal'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita'];
    $kata_kata = $_POST['bijak'];

    echo "
    Nama : $nama <br>
    Tempat Lahir : $lahir<br>
    Tanggal Lahir : $tanggal<br>
    Jenis Kelamin : $kelamin<br>
    Alamat : $alamat<br>
    Agama : $agama<br>
    Pendidikan Terakhir : $pendidikan<br>
    Status : $status<br>
    Hobi : $hobi<br>
    Cita-Cita : $cita_cita<br>
    Kata-Kata Bijak : $kata_kata";
}
?>