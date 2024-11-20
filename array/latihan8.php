<?php

$data_json = '[
    {
        "no": "1001",
        "judul": "Bumi Manusia",
        "genre": "Sejarah",
        "penulis": "Pramoedya Ananta Toer",
        "penerbit": "Lentera Hati",
        "tahun_rilis": "1980"
    },
     {
        "no": "1002",
        "judul": "Laskar Pelangi",
        "genre": "Pendidikan",
        "penulis": "Andrea Hirata",
        "penerbit": "Bentang Pusaka",
        "tahun_rilis": "2005"
    },
    {
        "no": "1003",
        "judul": "Ayat-Ayat Cinta",
        "genre": "Romansa",
        "penulis": "Habiburrahman El Shirazy",
        "penerbit": "Republika",
        "tahun_rilis": "2004"
    },
     {
        "no": "1004",
        "judul": "Harry Poter",
        "genre": "Fantasi",
        "penulis": "J.K Rowling",
        "penerbit": "Bloombury",
        "tahun_rilis": "1997"
    },
    {
        "no": "1005",
        "judul": "Ayat-Ayat Cinta",
        "genre": "Romansa",
        "penulis": "Habiburrahman El Shirazy",
        "penerbit": "Republika",
        "tahun_rilis": "2004"
    },
      {
    "no": 1006,
    "judul": "To Kill a Mockingbird",
    "genre": "Fiction",
    "penulis": "Harper Lee",
    "penerbit": "J.B. Lippincott & Co.",
    "tahun_rilis": 1960
  },
  {
    "no": 1007,
    "judul": "The Lord of the Rings",
    "genre": "Fantasy",
    "penulis": "J.R.R. Tolkien",
    "penerbit": "Allen & Unwin",
    "tahun_rilis": 1954
  },
  {
    "no": 1008,
    "judul": "Pride and Prejudice",
    "genre": "Romance",
    "penulis": "Jane Austen",
    "penerbit": "T. Egerton",
    "tahun_rilis": 1813
  },
  {
    "no": 1009,
    "judul": "The Hunger Games",
    "genre": "Science Fiction",
    "penulis": "Suzanne Collins",
    "penerbit": "Scholastic Press",
    "tahun_rilis": 2008
  },
  {
    "no": 1010,
    "judul": "The Catcher in the Rye",
    "genre": "Coming-of-Age",
    "penulis": "J.D. Salinger",
    "penerbit": "Little, Brown and Company",
    "tahun_rilis": 1951
  },
  {
    "no": 1011,
    "judul": "The Great Gatsby",
    "genre": "Fiction",
    "penulis": "F. Scott Fitzgerald",
    "penerbit": "Charles Scribner Sons",
    "tahun_rilis": 1925
  },
  {
    "no": 1012,
    "judul": "1984",
    "genre": "Dystopian",
    "penulis": "George Orwell",
    "penerbit": "Secker and Warburg",
    "tahun_rilis": 1949
  },
  {
    "no": 1013,
    "judul": "The Picture of Dorian Gray",
    "genre": "Philosophical Fiction",
    "penulis": "Oscar Wilde",
    "penerbit": "Lippincott Monthly Magazine",
    "tahun_rilis": 1890
  },
  {
    "no": 1014,
    "judul": "Wuthering Heights",
    "genre": "Romance",
    "penulis": "Emily Brontë",
    "penerbit": "Thomas Cautley Newby",
    "tahun_rilis": 1847
  },
  {
    "no": 1015,
    "judul": "Jane Eyre",
    "genre": "Romance",
    "penulis": "Charlotte Brontë",
    "penerbit": "Smith, Elder & Co.",
    "tahun_rilis": 1847
  },
  {
    "no": 1016,
    "judul": "The Adventures of Huckleberry Finn",
    "genre": "Adventure",
    "penulis": "Mark Twain",
    "penerbit": "Charles L. Webster and Company",
    "tahun_rilis": 1885
  },
  {
    "no": 1017,
    "judul": "The Count of Monte Cristo",
    "genre": "Adventure",
    "penulis": "Alexandre Dumas",
    "penerbit": "Pierre-Zébée Moulard et Édouard Bournan",
    "tahun_rilis": 1844
  },
  {
    "no": 1018,
    "judul": "Moby-Dick",
    "genre": "Adventure",
    "penulis": "Herman Melville",
    "penerbit": "Harper & Brothers",
    "tahun_rilis": 1851
  },
  {
    "no": 1019,
    "judul": "The Scarlet Letter",
    "genre": "Romance",
    "penulis": "Nathaniel Hawthorne",
    "penerbit": "Ticknor and Fields",
    "tahun_rilis": 1850
  },
  {
    "no": 1020,
    "judul": "The Grapes of Wrath",
    "genre": "Fiction",
    "penulis": "John Steinbeck",
    "penerbit": "The Viking Press",
    "tahun_rilis": 1939
  }
    
]';



// $lis = json_decode($data_json);
// // echo"<center><h2> Kumpulan Novel Terbaru </h2></center> <hr>";
// foreach($lis as $buku){
// echo"No : {$buku->no}<br>";
// echo"Judul : {$buku->judul}<br>";
// echo"Genre : {$buku->genre}<br>";
// echo"Penulis : {$buku->penulis}<br>";
// echo"Penerbit : {$buku->penerbit}<br>";
// echo"Tahun Rilis : {$buku->tahun_rilis}<br>";
// echo"<hr>";
// } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Kumpulan Novel Terbaru</h2>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Judul</td>
                <td>Genre</td>
                <td>Penulis</td>
                <td>Penerbit</td>
                <td>Tahun</td>
            </tr>
            <?php $lis = json_decode($data_json);
            foreach ($lis as $buku) {
            ?>
                <tr>
                    <td><?php echo "{$buku->no}<br>";  ?></td>
                    <td><?php echo "{$buku->judul}<br>";  ?></td>
                    <td><?php echo "{$buku->genre}<br>";  ?></td>
                    <td><?php echo "{$buku->penulis}<br>";  ?></td>
                    <td><?php echo "{$buku->penerbit}<br>";  ?></td>
                    <td><?php echo "{$buku->tahun_rilis}<br>";  ?></td>
                </tr>
            <?php } ?>
        </table>
    </center>
</body>

</html>