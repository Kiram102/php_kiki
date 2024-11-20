<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h3>Form Menggunakan OOP</h3>
        <form action="" method="post">
            <label for="">Panjang</label><br>
            <input type="number" required name="panjang"><br>
            <label for="">Lebar</label><br>
            <input type="number" required name="Lebar"><br>
            <br> <input type="submit" name="kalku">
        </form>
    </center>
</body>
</html>

<?php

    if(isset($_POST['kalku'])){
        $panjang = $_POST['panjang'];
        $lebar = $_POST['Lebar'];

        class luas {
            public $luas;

            public function hitung($panjang,$lebar){
                $this->luas = $panjang * $lebar;
                echo"Panjang : $panjang <br>";
                echo"Lebar : $lebar <br>";
                echo"Hasil : $this->luas <br>";
            }
        }

        $total = new luas();

        echo $total->hitung($panjang,$lebar);
    }

?>