<?php
// // membuat array
// $barang = ["Buku Tulis", "Penghapus", "Spidol"];

// // menampilkan isi array dengan perulangan for
// for($i=0; $i < count($barang); $i++){
//     echo $barang[$i]."<br>";
// }

// membuat array
// $barang = ["Buku Tulis", "Penghapus", "Spidol"];

// // menampilkan isi array dengan perulangan foreach
// foreach($barang as $isi){
//     echo $isi."<br>";
// }

// echo "<hr>";

// // menampilkan isi array dengan perulangan while
// $i = 0;
// while($i < count($barang)){
//     echo $barang[$i]."<br>";
//     $i++;
// }

 $data_siswa = ["Ridho","Faza","Regita","Dudi","Abel","Sandi","Surya","Kiki","Fahri","Keyndra"];
 $data_kelamin = ["Laki-Laki","Perempuan"];
 $data_hobi = ["Membaca","Menulis","Sepak Bola","Tidur","Main Game","Menggambar","Memanah","Lari","Tarung","Memanjat"];



// echo "
// $data_siswa[0] $data_kelamin[0] $data_hobi[0]
// <br>
// $data_siswa[1] $data_kelamin[0] $data_hobi[1]
// <br>
// $data_siswa[2] $data_kelamin[1] $data_hobi[2]
// <br>
// $data_siswa[3] $data_kelamin[0] $data_hobi[3]
// <br>
// $data_siswa[4] $data_kelamin[0] $data_hobi[4]
// <br>
// $data_siswa[5] $data_kelamin[0] $data_hobi[5]
// <br>
// $data_siswa[6] $data_kelamin[0] $data_hobi[6]
// <br>
// $data_siswa[7] $data_kelamin[0] $data_hobi[7]
// <br>
// $data_siswa[8] $data_kelamin[0] $data_hobi[8]
// <br>
// $data_siswa[9] $data_kelamin[0] $data_hobi[9]
// <br>
// ";

foreach($data_siswa as $data){
    echo"$data <br>";
}
?>