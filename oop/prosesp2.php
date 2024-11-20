<?php

if (isset($_POST['simpan'])) {
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $tempat_l = $_POST['lahir'];
    $tempat_t = $_POST['tanggal'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];

    $provinsi = $_POST['provinsi'];
    $kabupaten = $_POST['Kabupaten'];
    $kecamatan = $_POST['kecamatan'];
    $desa = $_POST['desa'];
    $alamat = $_POST['alamat'];
    $kode = $_POST['kode'];

    $namas = $_POST['namas'];
    $alamats = $_POST['alamats'];

    $ortu = $_POST['ortu'];
    $namaortu = $_POST['namaortu'];
    $kerja = $_POST['kerja'];
    $nomoro = $_POST['nomoro'];
    $alamato = $_POST['alamato'];

    class ppdb
    {

        public function data_diri($a, $b, $c, $d, $e, $f, $g)
        {
?>
            <!doctype html>
            <html lang="en">

            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

                <title>Hello, world!</title>
            </head>

            <body>
                <div class="card mt-2 mx-auto" style="width: 40%;">
                    <div class="card-body">
                        <h5><b>Data Diri</b></h5>
                        <table class="mx-auto">
                            <tr>
                                <td>Jurusan</td>
                                <td>:</td>
                                <td><?php echo $a ?></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?php echo $b ?></td>
                            </tr>
                            <tr>
                                <td>Kelamin</td>
                                <td>:</td>
                                <td><?php echo $c ?></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td><?php echo $d ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><?php echo $e ?></td>
                            </tr>
                            <tr>
                                <td>No HP</td>
                                <td>:</td>
                                <td><?php echo $f ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $g ?></td>
                            </tr>
                        </table>
                        <br>
        <?php
        }

        public function alamat($a, $b, $c, $d, $e, $f)
        {
        ?>
                        <h5><b>Alamat Diri</b></h5>
                        <table class="mx-auto">
                            <tr>
                                <td>Provinsi</td>
                                <td>:</td>
                                <td><?php echo $a ?></td>
                            </tr>
                            <tr>
                                <td>Kabupaten</td>
                                <td>:</td>
                                <td><?php echo $b ?></td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td>:</td>
                                <td><?php echo $c ?></td>
                            </tr>
                            <tr>
                                <td>Desa</td>
                                <td>:</td>
                                <td><?php echo $d ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo $e ?></td>
                            </tr>
                            <tr>
                                <td>Kode</td>
                                <td>:</td>
                                <td><?php echo $f ?></td>
                            </tr>
                        </table>
                        <br>
                
        <?php
        }

        public function asal_sekolah($a, $b)
        {
        ?>
              
                        <h5><b>Asal Sekolah</b></h5>
                        <table class="mx-auto">
                            <tr>
                                <td>Nama Sekolah</td>
                                <td>:</td>
                                <td><?php echo $a ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Sekolah</td>
                                <td>:</td>
                                <td><?php echo $b ?></td>
                            </tr>
                        </table>
                        <br>
                   
        <?php
        }

        public function data_ortu($a, $b, $c, $d, $e)
        {
        ?>
                
                        <h5><b>Data Ortu</b></h5>
                        <table class="mx-auto">
                            <tr>
                                <td>Orang Tua</td>
                                <td>:</td>
                                <td><?php echo $a ?></td>
                            </tr>
                            <tr>
                                <td>Nama Orang Tua</td>
                                <td>:</td>
                                <td><?php echo $b ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td><?php echo $c ?></td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td>:</td>
                                <td><?php echo $d ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Orang Tua</td>
                                <td>:</td>
                                <td><?php echo $e ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            </body>

            </html>
<?php
        }
    }

    $cetak = new ppdb();
    echo $cetak->data_diri($jurusan, $nama, $kelamin, $tempat_l, $tempat_t, $hp, $email);
    echo $cetak->alamat($provinsi, $kabupaten, $kecamatan, $desa, $alamat, $kode);
    echo $cetak->asal_sekolah($namas, $alamats);
    echo $cetak->data_ortu($ortu, $namaortu, $kerja, $nomoro, $alamato);
}


?>