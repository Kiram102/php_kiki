<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>

    <center>
        <img src="images-removebg-preview.png" alt="" height="200px" width="250px">
        <h2>PENGGAJIAN<br>GURU/KARYAWAN YAYASAN ASSALAAM</h2>
    </center>

    <div class="card mx-auto" style="width: 45%;">
        <div class="card-header">
            Data Penggajian
        </div>
        <div class="card-body">
            <form action="proses.php" method="post">
                <table align="center">
                    <tr>
                        <td>No</td>
                        <td>:</td>
                        <td><input type="number" name="no" placeholder="No" required class="form-control mb-1"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder="Nama" required class="form-control mb-1"></td>
                    </tr>
                    <tr>
                        <td>Unit Pendidikan</td>
                        <td>:</td>
                        <td>
                            <select name="pendidikan" id="" class="form-control mb-1">
                                <option value="">Pilih Unit Pendidikan</option>
                                <option value="TK">TK</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Gaji</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal" value="" class="form-control mb-1"></td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-center mt-2">Gaji</h3>
                        </td>
                        <td></td>
                        <td>
                            <h3 class="text-center mt-2">Potongan</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td></td>
                        <td>BPJS</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="jabatan" id="" class="form-control mb-1">
                                <option value="">Pilih Jabatan</option>
                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                <option value="Wakasek">Wakasek</option>
                                <option value="Guru">Guru</option>
                                <option value="OB">OB</option>
                            </select>
                        </td>
                        <td></td>
                        <td><input type="number" name="bpjs" required class="form-control mb-1"></td>
                    </tr>
                    <tr>
                        <td>Lama Kerja</td>
                        <td></td>
                        <td>Pinjaman</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="lama" required placeholder="Lama Kerja" class="form-control mb-1"></td>
                        <td></td>
                        <td><input type="number" name="pinjaman" required placeholder="Pinjaman" class="form-control mb-1"></td>
                    </tr>
                    <tr>
                        <td>Status Kerja</td>
                        <td></td>
                        <td>Tabungan</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="status" id="" class="form-control mb-1">
                                <option value="">Pilih Status Kerja</option>
                                <option value="Tetap">Tetap</option>
                                <option value="Kontrak">Kontrak</option>
                            </select>
                        </td>
                        <td></td>
                        <td><input type="number" name="tabungan" required placeholder="Tabungan" class="form-control mb-1" id=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Lainnya</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="number" name="lainnya" required placeholder="Lainnya" class="form-control mb-1" id="rupiah"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="proses" value="Proses" class="form-control mt-1 bg-primary"></td>
                        <td></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" type="text/javascript">
    </script>
</body>

</html>