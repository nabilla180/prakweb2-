//array asosiatif
$mahasiswa = ["Nama"=>"Nabilla", "Umur"=>18, "Alamat"=>"Jakarta Selatan"];

echo $mahasiswa["Nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>";
}

echo "<br>";