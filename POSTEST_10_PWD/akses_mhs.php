<?php
$url = "http://localhost/POSTEST_10_PWD/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
 echo "<p>";
 echo "NIM : " . $r->nim . "<br />";
 echo "Nama : " . $r->nama . "<br />";
 echo "jenis kel : " . $r->jkelamin . "<br />";
 echo "Alamat : " . $r->alamat . "<br />";
 echo "Tgl Lahir : " . $r->tgl_lahir . "<br />";
 echo "</p>";
}