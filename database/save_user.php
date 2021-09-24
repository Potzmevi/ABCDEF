<?php
include("db.php");

if(isset($_POST['save_user'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $job = $_POST['job'];

    $query = "INSERT INTO personal(id,name,phone,adress,job) VALUES('$id', '$name', '$phone', '$adress', '$job')";
    $result=mysqli_query($conn,$query);
    if(!$result){
        $_SESSION['message_type']='danger';
        $_SESSION['message']='Error al guardar';
    }else{
        $_SESSION['message']='Guardado correctamente';
        $_SESSION['message_type']='success';
    }

    

    header("Location: ../insertar.php");
}

?>