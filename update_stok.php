<?php

include 'connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];

$sql = "UPDATE stok_barang set 
        
        nama='$nama', 
        jenis='$jenis', 
        jumlah='$jumlah' WHERE id='$id'";
       
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