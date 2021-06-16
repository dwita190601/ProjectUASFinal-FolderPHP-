<?php

include 'connection.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];


$sql = "INSERT INTO tb_mahasiswa set 
        nim='$nim', 
        nama='$nama', 
        jurusan='$jurusan', 
        foto='http://192.168.43.5/db_api/foto/diary.jpeg'";
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