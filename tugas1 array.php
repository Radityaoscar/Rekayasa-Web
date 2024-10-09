<?php
// variabel JSON
$json = '{"nama": "Indra", "umur": 20, "alamat": {"kota": "Semarang", "kode_pos": 12345}, "hobi": ["tidur", "olahraga"]}';

// decode JSON menjadi PHP Object
$obj = json_decode($json);

// decode JSON menjadi PHP Array
$arr = json_decode($json, true);

// akses nilai dari PHP Array
echo "Nama : " . $arr['nama'] . "<br>";
echo "Umur : " . $arr['umur'] . "<br>";
echo "Kota : " . $arr['alamat']['kota'] . "<br>";
echo "Kode Pos : " . $arr['alamat']['kode_pos'] . "<br>";
echo "Hobi pertama : " . $arr['hobi'][0] . "<br>";
?>
