<?php

    class ppdb {

        public function data_diri($nama,$jenis_jurusan,$jk,$tempat_lahir,$tanggal_lahir,$nomor_hp,$email){

            echo"Nama Lengkap : $nama<br>";
            echo"Jenis Jurusan : $jenis_jurusan<br>";
            echo"Jenis Kelamon : $jk<br>";
            echo"Tempat Lahir : $tempat_lahir<br>";
            echo"Tanggal Lahir : $tanggal_lahir<br>";
            echo"Nomor HP : $nomor_hp<br>";
            echo"Email : $email<br>";
            echo"<hr>";
        }

        public function alamat_calon_pendaftar($provinsi,$kota,$kecamatan,$desa,$alamat,$kode_pos){

            echo"Provinsi : $provinsi<br>";
            echo"Kota : $kota<br>";
            echo"Kecamatan : $kecamatan<br>";
            echo"Desa : $desa<br>";
            echo"Alamat : $alamat<br>";
            echo"Kode Pos : $kode_pos<br>";
            echo"<hr>";
        }

        public function data_asal_sekolah($nam_sekolah,$alamat_sekolah){

            echo"Nama Asal Sekolah : $nam_sekolah<br>";
            echo"Almat Sekolah : $alamat_sekolah<br>";
            echo"<hr>";
        }

        public function data_ortu($nama,$pekerjaan,$no_hp,$alamat){

            echo"Nama Lengkap Ayah/Ibu/Wali : $nama<br>";
            echo"Pekerjaan Ayah/Ibu/Wali : $pekerjaan<br>";
            echo"No HP : $no_hp<br>";
            echo"Alamat : $alamat<br>";
            echo"<hr>";
        }
    }

    $data = new ppdb;

    echo $data->data_diri("kiki","RPL","Laki Laki","Bandung","20 Oktober 2024","082115300217","amandaazhar8@gmail.com");
    echo $data->alamat_calon_pendaftar("Jawa Barat","Bandung","Cibaduyut","Anggacarang","Anggacarang RT1 RW2","0981");
    echo $data->data_asal_sekolah("Al-Basyariyah","Arjasari");
    echo $data->data_ortu("Robert","Kapal Laut","098172681","Anggacarang RT1 RW2");

?>