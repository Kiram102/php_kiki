<?php

class kucing
{

    var $warna;
    var $jenis;

    function makan()
    {
        echo "Kucing Makan Whiskas";
    }

    function minum()
    {
        echo "Kucing Saya Minum Asi";
    }
}

$kucing = new kucing();

echo $kucing->makan();
echo "<br>";
echo $kucing->minum();

?>