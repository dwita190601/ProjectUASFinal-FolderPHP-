<?php

include 'connection.php';

$id = $_POST['id'];


$sql = "DELETE FROM tb_mahasiswa WHERE id='$id'";
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