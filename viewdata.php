<?php
include_once("Koneksi.php");
$query="SELECT * FROM tb_buku";

$hasil=mysqli_query ($conn, $query);

while($data=mysqli_fetch_array($hasil)){
   echo $data ['Judul_buku'] . "<br/>";
}

?>