<?php

include 'connection.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

$sql = "UPDATE tb_mahasiswa set 
        
        nim='$nim', 
        nama='$nama', 
        jurusan='$jurusan' WHERE id='$id'";
       
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