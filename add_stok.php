<?php

include 'connection.php';

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
// $foto = $_POST['foto'];

// $sql = "INSERT INTO stok (nam,description, price, image,star,jumlah,id_user) 
// VALUES ('".$name."', '".$description."', '".$price."', '".$image."', '".$star."', '".$jumlah."', '".$idUser."')";

$sql = "INSERT INTO stok_barang set 
        nama='$nama', 
        jenis='$jenis', 
        jumlah='$jumlah', 
        -- foto ='$foto', 
        foto='http://192.168.43.5/db_api/foto/produktiga.jpg'
        ";
$result = $connect->query($sql);

if($result){
    echo json_encode(array(
        "succes" => true,
      
    ));
}else{
    echo json_encode(array(
        "succes" => false,
   
    ));
}