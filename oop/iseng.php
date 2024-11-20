<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Makanan dan Minuman</title>
</head>
<body>

    <h1>Pilih Menu</h1>
    <form method="POST" action="">
        <select name="menuSelect" onchange="this.form.submit()">
            <option value="">Pilih...</option>
            <option value="makanan" <?php isset($_POST['menuSelect']) && $_POST['menuSelect'] == 'makanan' ? 'selected' : '' ?>>Makanan</option>
            <option value="minuman" <?php isset($_POST['menuSelect']) && $_POST['menuSelect'] == 'minuman' ? 'selected' : '' ?>>Minuman</option>
        </select>
    </form>

    <?php
    if (isset($_POST['menuSelect'])) {
        if ($_POST['menuSelect'] == 'makanan') {
            echo '<h2>Pilih Makanan</h2>';
            echo '<form method="POST" action="">';
            echo '<select name="makanan">';
            echo '<option value="">Pilih Makanan...</option>';
            echo '<option value="nasi_goreng">Nasi Goreng</option>';
            echo '<option value="ayam_bakar">Ayam Bakar</option>';
            echo '<option value="salad">Salad</option>';
            echo '</select>';
            echo '<input type="submit" value="Pesan">';
            echo '</form>';
        } elseif ($_POST['menuSelect'] == 'minuman') {
            echo '<h2>Pilih Minuman</h2>';
            echo '<form method="POST" action="">';
            echo '<select name="minuman">';
            echo '<option value="">Pilih Minuman...</option>';
            echo '<option value="teh">Teh</option>';
            echo '<option value="kopi">Kopi</option>';
            echo '<option value="jus">Jus</option>';
            echo '</select>';
            echo '<input type="submit" value="Pesan">';
            echo '</form>';
        }
    }
    ?>

</body>
</html>