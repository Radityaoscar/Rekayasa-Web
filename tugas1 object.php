<?php
// variabel JSON
$json = '{"nama": "Indra", "umur": 20, "alamat": {"kota": "Semarang", "kode_pos": 12345}, "pekerjaan": ["jasa gebuk"]}';

// decode JSON menjadi PHP Object
$obj = json_decode($json);

// akses nilai dari PHP Object
echo "Nama : " . $obj->nama . "<br>";
echo "Umur : " . $obj->umur . "<br>";
echo "Kota : " . $obj->alamat->kota . "<br>";
echo "Kode Pos : " . $obj->alamat->kode_pos . "<br>";
echo "pekerjaan : " . $obj->pekerjaan[0] . "<br>";
?>