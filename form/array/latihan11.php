<?php
$novel =[
    [
       "No_urut"=> "1",
       "Judul" => "Laskar Pelangi",
       "Genre" => "Drama",
       "Penulis" => "Pidi Baiq",
       "Penerbit" =>  "Bentang Pustaka",
       "Tanggal_Rilis" => "2005",

    ],
    [
        "No_urut" => "2",
        "Judul" => "The Alchemist",
        "Genre" => "Fiksi",
        "Penulis" => "Paulo Coelho",
        "Penerbit" => "HarperTorch",
        "Tanggal_Rilis" => "1988",
    ],
    [
        "No_urut" => "3",
        "Judul" => "Perahu Kertas",
        "Genre" => "Romansa",
        "Penulis" => "Pidi Baiq",
        "Penerbit" => "Bentang Pustaka",
        "Tanggal_Rilis" => "2009",
    ],
    [
        "No_urut" =>"4",
        "Judul" => "Ayat ayat Cinta",
        "Genre" => "Romansa Islami",
        "Penulis" => "Habibirrahman EI",
        "Penerbit" => "Republika",
        "Tanggal_Rilis" => "2004",
    ],
    [
        "No_urut"  => "5",
        "Judul"=> "Hujan",
        "Genre" => "Fiksi",
        "Penulis" => "Tere Liye",
        "Penerbit" => "Granmedia Pustaka",
        "Tanggal_Rilis" => "2016",
    ],
    [
        "No_urut"  => "6",
        "Judul"=> "Harry Potter And the Philosop's stone",
        "Genre" => "Fantasi",
        "Penulis" => "J.K.Rowling",
        "Penerbit" => "Granmedia Pustaka",
        "Tanggal_Rilis" => "1997",
    ],
    [
        "No_urut"  => "7",
        "Judul"=> "The Hugger Games",
        "Genre" => "Fiksi",
        "Penulis" => "Suzanne Collins",
        "Penerbit" => "Scholastic Press",
        "Tanggal_Rilis" => "2008",
    ],
    [
        "No_urut"  => "8",
        "Judul"=> "The Faultin our stars",
        "Genre" => "Romansa",
        "Penulis" => "John Green",
        "Penerbit" => "Dutton Books",
        "Tanggal_Rilis" => "2012",
    ],
    [
        "No_urut"  => "9",
        "Judul"=> "Twilight",
        "Genre" => "Fantasi",
        "Penulis" => "Stephenie Meyer",
        "Penerbit" => "little,Brown and company",
        "Tanggal_Rilis" => "2005",
    ],
    [
        "No_urut"  => "10",
        "Judul"=> "To kill a mockingbird",
        "Genre" => "Klasik",
        "Penulis" => "Harper Lee",
        "Penerbit" => "J.B Lippincott&co,",
        "Tanggal_Rilis" => "1960",
    ],
    [
        "No_urut"  => "11",
        "Judul"=> "1984",
        "Genre" => "Fiksi",
        "Penulis" => "George Orwell",
        "Penerbit" => "Secker&Warburg",
        "Tanggal_Rilis" => "1949",
    ],
    [
        "No_urut"  => "12",
        "Judul"=> "Pride And Prejudice",
        "Genre" => "Klasik",
        "Penulis" => "Jane Austen",
        "Penerbit" => "T.Egerton",
        "Tanggal_Rilis" => "1813",
    ],
    [
        "No_urut"  => "13",
        "Judul"=> "The Cather in the rye",
        "Genre" => "Drama",
        "Penulis" => "J.D. Salinger",
        "Penerbit" => "Brown And Company",
        "Tanggal_Rilis" => "1951",
    ],
    [
        "No_urut"  => "14",
        "Judul"=> "The Da Vinci Code",
        "Genre" => "Misteri",
        "Penulis" => "Dan Brown",
        "Penerbit" => "Doubleday",
        "Tanggal_Rilis" => "2003",
    ],
    [
        "No_urut"  => "15",
        "Judul"=> "Marmut Merah Jambu",
        "Genre" => "Humor",
        "Penulis" => "Raditya Dika",
        "Penerbit" => "GagasMedia",
        "Tanggal_Rilis" => "2010",
    ],
    [
        "No_urut"  => "16",
        "Judul"=> "Life of pi",
        "Genre" => "Petualangan",
        "Penulis" => "Yann Martel",
        "Penerbit" => "Knopf Canada",
        "Tanggal_Rilis" => "2001",
    ],
    [
        "No_urut"  => "17",
        "Judul"=> "Animal farm",
        "Genre" => "Satire",
        "Penulis" => "George Orwell",
        "Penerbit" => "Secker and warburg",
        "Tanggal_Rilis" => "1945",
    ],
    [
        "No_urut"  => "18",
        "Judul"=> "The Little Prince",
        "Genre" => "Fantasi",
        "Penulis" => "Antoine de saint exupery",
        "Penerbit" => "Reynal And  hitchcock",
        "Tanggal_Rilis" => "1943",
    ],
    [
        "No_urut"  => "19",
        "Judul"=> "Pulang",
        "Genre" => "Sejarah,Drama",
        "Penulis" => "Leila S Chudori",
        "Penerbit" => "Kepustakaan populer Granmedia",
        "Tanggal_Rilis" => "2012",
    ],
    [
        "No_urut"  => "20",
        "Judul"=> "Bumi",
        "Genre" => "Fantasi,Petualagan",
        "Penulis" => "Tere Liye",
        "Penerbit" => "Granmedia Pustaka Utama",
        "Tanggal_Rilis" => "2014",
    ],
];
    echo "<center><h2>Novel populer</h2></center>";
foreach ($novel as $data ) {
    echo"No Urut :". $data['No_urut']. "<br>";
    echo "Judul :". $data['Judul']. "<br>";
    echo "Genre :". $data['Genre']. "<br>";
    echo "Penulis :". $data['Penulis']. "<br>";
    echo "Penerbit :". $data['Penerbit']. "<br>";
    echo "Tanggal Rilis :".$data['Tanggal_Rilis']."<br>";
    echo "<hr>";
}
?>