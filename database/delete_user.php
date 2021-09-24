<?php
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM personal WHERE id=$id";
    $result=mysqli_query($conn,$query);

    if(!$result){
        $_SESSION['message_type']='danger';
        $_SESSION['message']='Error al eliminar';
    }else{
        $_SESSION['message']='Eliminado correctamente';
        $_SESSION['message_type']='success';
    }

    header("Location: ../visualizar.php");
}
?>

