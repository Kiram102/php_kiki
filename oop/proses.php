<?php

if (isset($_POST['proses'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $harian_mtk = $_POST['harian_mtk'];
    $tugas_mtk = $_POST['tugas_mtk'];
    $uts_mtk = $_POST['uts_mtk'];
    $uas_mtk = $_POST['uas_mtk'];

    $harian_indo = $_POST['harian_indo'];
    $tugas_indo = $_POST['tugas_indo'];
    $uts_indo = $_POST['uts_indo'];
    $uas_indo = $_POST['uas_indo'];

    $harian_ingris = $_POST['harian_ingris'];
    $tugas_ingris = $_POST['tugas_ingris'];
    $uts_ingris = $_POST['uts_ingris'];
    $uas_ingris = $_POST['uas_ingris'];

    $harian_pro = $_POST['harian_pro'];
    $tugas_pro = $_POST['tugas_pro'];
    $uts_pro = $_POST['uts_pro'];
    $uas_pro = $_POST['uas_pro'];

    class rapot
    {
        public $rata_m;
        public $rata_i;
        public $rata_in;
        public $rata_p;

        public function total($harian_m, $tugas_m, $uts_m, $uas_m, $harian_i, $tugas_i, $uts_i, $uas_i, $harian_in, $tugas_in, $uts_in, $uas_in, $harian_p, $tugas_p, $uts_p, $uas_p)
        {
            $kalku_m = $harian_m + $tugas_m + $uts_m + $uas_m;
            $this->rata_m = $kalku_m / 4;
            $kalku_i = $harian_i + $tugas_i + $uts_i + $uas_i;
            $this->rata_i = $kalku_i / 4;
            $kalku_in = $harian_in + $tugas_in + $uts_in + $uas_in;
            $this->rata_in = $kalku_in / 4;
            $kalku_p = $harian_p + $tugas_p + $uts_p + $uas_p;
            $this->rata_p = $kalku_p / 4;
?>
            <!doctype html>
            <html lang="en">

            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <!-- Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            </head>

            <body>
                <table class="table table-bordered border-primary mx-auto" style="width: 50%;">
                    <tr>
                        <td>Mapel</td>
                        <td>Harian</td>
                        <td>Tugas</td>
                        <td>Uts</td>
                        <td>Uas</td>
                        <td>Rata-Rata</td>
                        <td>Grade</td>
                    </tr>
                    <tr>
                        <td>Matematika</td>
                        <td><?php echo $harian_m ?></td>
                        <td><?php echo $tugas_m ?></td>
                        <td><?php echo $uts_m ?></td>
                        <td><?php echo $uas_m ?></td>
                        <td><?php echo $this->rata_m ?></td>
                        <td><?php if ($this->rata_m >= 75) {
                                echo "Tuntas";
                            } else {
                                echo "Tidak Tuntas";
                            } ?></td>
                    </tr>
                    <tr>
                        <td>Indonesia</td>
                        <td><?php echo $harian_i ?></td>
                        <td><?php echo $tugas_i ?></td>
                        <td><?php echo $uts_i ?></td>
                        <td><?php echo $uas_i ?></td>
                        <td><?php echo $this->rata_i ?></td>
                        <td><?php if ($this->rata_i >= 75) {
                                echo "Tuntas";
                            } else {
                                echo "Tidak Tuntas";
                            } ?></td>
                    </tr>
                    <tr>
                        <td>Inggris</td>
                        <td><?php echo $harian_in ?></td>
                        <td><?php echo $tugas_in ?></td>
                        <td><?php echo $uts_in ?></td>
                        <td><?php echo $uas_in ?></td>
                        <td><?php echo $this->rata_in ?></td>
                        <td><?php if ($this->rata_in >= 75) {
                                echo "Tuntas";
                            } else {
                                echo "Tidak Tuntas";
                            } ?></td>
                    </tr>
                    <tr>
                        <td>Produktif</td>
                        <td><?php echo $harian_p ?></td>
                        <td><?php echo $tugas_p ?></td>
                        <td><?php echo $uts_p ?></td>
                        <td><?php echo $uas_p ?></td>
                        <td><?php echo $this->rata_p ?></td>
                        <td><?php if ($this->rata_p >= 75) {
                                echo "Tuntas";
                            } else {
                                echo "Tidak Tuntas";
                            } ?></td>
                    </tr>
                </table>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            </body>

            </html>
<?php
        }
    }

    $cetak = new rapot();

    echo " <br><center>  <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>$nama</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>$kelas</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>$jurusan</td>
        </tr>
    </table></center><br>";

    echo $cetak->total($harian_mtk, $tugas_mtk, $uts_mtk, $uas_mtk, $harian_indo, $tugas_indo, $uts_indo, $uas_indo, $harian_ingris, $tugas_ingris, $uts_ingris, $uas_ingris, $harian_pro, $tugas_pro, $uts_pro, $uas_pro);
}
?>