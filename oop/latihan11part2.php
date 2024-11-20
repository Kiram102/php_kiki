<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
</head>
<style>
    table {
        width: 80%;
    }

    select {
        width: 150%;
        padding: 1%;
    }
</style>

<body>
<div class="card mx-auto mt-5 shadow-lg p-3 mb-5 bg-body rounded" style="width: 70%;">
            <div class="card-body ">
                <h5><b>Informasi</b></h5>
                <p>Apabila anda telah melakukan pendaftaran, silahkan klik tombol "Cek Status Pendaftaran"</p>
                <div class="d-flex gap-3">
                <button class="btn btn-primary mr-1 mb-1 waves-effect waves-light" id="cekstatus">Cek Status Pendaftaran</button>
    <a href="" class="btn btn-warning mr-1 mb-1 waves-effect waves-light">Kembali ke Home</a>
    <a href="" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">Situs Resmi SMK
        ASSALAAM</a>
        </div>
            </div>
        </div>


    <form action="prosesp2.php" method="post">
        <div class="card mx-auto mt-5 shadow-lg p-3 mb-5 bg-body rounded" style="width: 70%;">
            <div class="card-body">
                <h5><b>Data Diri Calon Pendaftar (Form yang bertanda * wajib di isi)</b></h5>
                <br>
                <table>
                    <tr>
                        <td>Jurusan</td>
                        <td><select name="jurusan" id="">
                                <option value="" disabled selected>Pilih Jurusan</option>
                                <option value="RPL">RPL</option>
                                <option value="TBSM">TBSM</option>
                                <option value="TKRO">TKRO</option>
                            </select> </td>
                    </tr>

                    <tr>
                        <td>Nama Lengkap</td>
                        <td><input type="text" class="form-control mt-2" placeholder="Nama Panjang" aria-label="Username" name="nama" style="width: 150%;"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="checkbox" name="kelamin" id="" class="mt-3 mb-1" value="Laki-Laki"> Laki-Laki <br> <input type="checkbox" name="kelamin" id="" class="mt-3 mb-1" value="Perempuan"> Perempuan</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><input type="text" class="form-control mt-2" placeholder="Tempat Lahir" aria-label="Username" name="lahir" style="width: 150%;"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="date" class="form-control mt-2" placeholder="Tanggal Lahir" aria-label="Username" name="tanggal" style="width: 150%;"></td>
                    </tr>
                    <tr>
                        <td>Nomor HP siswa yang bisa dihubungi</td>
                        <td><input type="number" class="form-control mt-2" placeholder="HP" aria-label="Username" name="hp" style="width: 150%;"></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="mt-1">Email Siswa</p>
                        </td>
                        <td><input type="email" class="form-control mt-2" placeholder="Email" aria-label="Username" name="email" style="width: 150%;"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card mx-auto mt-5 shadow-lg p-3 mb-5 bg-body rounded" style="width: 70%;">
            <div class="card-body">
                <h5><b>Alamat Calon Pendaftar</b></h5>
                <br>
                <table>
                    <tr>
                        <td>Provinsi</td>
                        <td><select name="provinsi" id="" style="width: 135%;">
                                <option value="" disabled selected>Pilih Provinsi</option>
                                <option value="Jambi">Jambi</option>
                                <option value="Riaw">Riau</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Papua">Papua</option>
                                <option value="Bali">Bali</option>
                                <option value="Sumatra">Sumatra</option>
                                <option value="Jwa Tengah">Jawa Tengah</option>
                                <option value="DKI Jakarta">DKI Jakarta</option>
                                <option value="Sumatera Utara">Sumatera Utara</option>
                            </select> </td>
                    </tr>
                    <tr>
                        <td>Kab / Kota</td>
                        <td><select name="Kabupaten" id="" class="mt-2" style="width: 135%;">
                                <option value="" disabled selected>Pilih Kota / Kabupaten</option>
                                <option value="Bogor">Bogor</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Malang">Malang</option>
                                <option value="Cianjur">Cianjur</option>
                                <option value="Pidie">Pidie</option>
                                <option value="Gianyar">Gianyar</option>
                                <option value="Banyumas">Banyumas</option>
                                <option value="Sleman">Sleman</option>
                                <option value="Tegal">Tegal</option>
                                <option value="Karawang">Karawang</option>
                            </select> </td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td><select name="kecamatan" id="" class="mt-2" style="width: 135%;">
                                <option value="" disabled selected>Pilih Kecamatan</option>
                                <option value="Sigli">Sigli</option>
                                <option value="Parit Malintang">Parit Malintang</option>
                                <option value="Blangkejeran">Blangkejeran</option>
                                <option value="Kuta">Kuta</option>
                                <option value="Banjarmasin">Banjarmasin</option>
                                <option value="Pati">Pati</option>
                                <option value="Sidoarjo">Sidoarjo</option>
                                <option value="Ubut">Ubut</option>
                                <option value="Medan">Medan</option>
                                <option value="Sukarame">Sukarame</option>
                            </select> </td>
                    </tr>
                    <tr>
                        <td>Desa / Kelurahan</td>
                        <td><select name="desa" id="" class="mt-2" style="width: 135%;">
                                <option value="" disabled selected>Pilih Desa / Kelurahan</option>
                                <option value="Sungai Nyalo">Sungai Nyalo</option>
                                <option value="Madobak">Madobak</option>
                                <option value="Tamansari">Tamansari</option>
                                <option value="Argosari">Argosari</option>
                                <option value="Bena">Bena</option>
                                <option value="Kete Kesu">Kete Kesu</option>
                                <option value="Panglipuran">Panglipuran</option>
                                <option value="Wae Rebo">Wae Rebo</option>
                                <option value="Sembungan">Sembungan</option>
                                <option value="Cemoro Lawang">Cemoro Lawang</option>
                            </select> </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" id="" class="mt-2" style="width: 135%;" rows="3%"></textarea></td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td><input type="number" class="form-control mt-1" placeholder="Kode Pos" aria-label="Username" name="kode" style="width: 135%;"></td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="card mx-auto mt-5 shadow-lg p-3 mb-5 bg-body rounded" style="width: 70%;">
            <div class="card-body">
                <h5><b>Data Asal Sekolah</b></h5>
                <br>
                <table>
                    <tr>
                        <td>Nama Asal Sekolah</td>
                        <td><input type="text" class="form-control mt-2" placeholder="Nama Asal Sekolah" aria-label="Username" name="namas" style="width: 136%;"></td>
                    </tr>
                    <tr>
                        <td>Alamat Sekolah</td>
                        <td><textarea name="alamats" id="" class="mt-2" style="width: 136%;" rows="3%"></textarea></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card mx-auto mt-5 shadow-lg p-3 mb-5 bg-body rounded" style="width: 70%;">
            <div class="card-body">
                <h5><b>Data Orang Tua</b></h5>
                <br>
                <table>
                    <tr>
                        <td>Nama Lengkap Ayah / Ibu / Wali</td>
                        <td><select name="ortu" id="" class="" style="width: 85%;">
                                <option value="Ayah">Ayah</option>
                                <option value="Ibu">Ibu</option>
                                <option value="Wali">Wali</option>
                            </select> </td>
                        <td><input type="text" placeholder="Nama Orang Tua" name="namaortu" required style="width: 174%;"></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah / Ibu / Wali</td>
                        <td><input type="text" class="form-control mt-2" placeholder="Pekerjaan Orang Tua" aria-label="Username" name="kerja" style="width: 252%;"></td>
                    </tr>
                    <tr>
                        <td>Nomor HP yang bisa dihubungi</td>
                        <td><input type="number" class="form-control mt-2" placeholder="Nomor HP" aria-label="Username" name="nomoro" style="width: 252%;"></td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td><textarea name="alamato" id="" class="mt-2" style="width: 252%;" rows="3%"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" class="btn btn-primary" name="simpan">Simpan & Daftar</button> <button type="reset" class="btn btn-outline-danger">Reset</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>