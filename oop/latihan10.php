<?php

 class gaji{

    public $gaji_pokok;
    public $tunjangan;
    public $potongan;
    public $total_gaji;

    public function gaji_pokok($nama,$jabatn){

        if ($jabatn == 'direktur') {
           $this->gaji_pokok = 10000000;
        } elseif ($jabatn == 'manager') {
           $this->gaji_pokok = 7500000;
        } elseif ($jabatn == 'karyawan'){
           $this->gaji_pokok = 5000000;
        } elseif ($jabatn =='ob'){
            $this->gaji_pokok =2500000;
        }

        echo"<h3>Gaji Pokok</h3>";
        echo "Nama Karyawan : $nama <br>";
        echo "Jabatan : $jabatn <br>";
        echo "Gaji :<br>". number_format($this->gaji_pokok);
        echo "<hr>";
    }

    public function tunjangan($pendidikan){

        if ($pendidikan == 's1'){
            $this->tunjangan = 1000000;
        } elseif ($pendidikan == 'sma'){
            $this->tunjangan = 750000;
        } elseif ($pendidikan == 'smp'){
            $this->tunjangan = 500000;
        } elseif ($pendidikan == 'sd'){
            $this->tunjangan = 250000;
        }

        echo"<h3>Tunjangan</h3>";
        echo "Pendidikan : $pendidikan <br>";
        echo "Tunjangan :<br>". number_format( $this->tunjangan);
        echo"<hr>";
    }

    public function potongan($tabungan,$pinjaman){
        
        echo"<h3>Potongan</h3>";
        echo"Tabungan :". number_format($tabungan)."<br>";
        echo"Pinjaman :". number_format($pinjaman)."<br>";
        $this->potongan = $tabungan - $pinjaman;
        echo "Potongan : $this->potongan";
        echo "<hr>";
    }

    public function total_gaji(){

        $this->total_gaji = $this->gaji_pokok * $this->tunjangan - $this->potongan;
        echo "<h3>Total Gaji Bersih</h3>";
        echo "Total Gaji Bersih :". number_format($this->total_gaji);
        
    }
 }

 $jadi = new gaji();

 echo $jadi->gaji_pokok("kiki","direktur");
 echo $jadi->tunjangan("s1");
 echo $jadi->potongan(50000,50000);
 echo $jadi->total_gaji();

?>