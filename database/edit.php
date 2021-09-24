<?php

include("db.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="SELECT * FROM personal WHERE id = $id";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
        $id =$row['id'];
        $name =$row['name'];
        $phone =$row['phone'];
        $adress =$row['adress'];
        $job=$row['job'];
    }
}


if(isset($_POST['update'])){
    $id = $_GET['id'];
    $ida = $_POST['ida'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $job = $_POST['job'];

    $query = "UPDATE personal set id='$ida', name='$name', phone='$phone', adress='$adress', job='$job' WHERE id=$id";
    mysqli_query($conn,$query);
    $_SESSION['message']='Editado correctamente';
    $_SESSION['message_type']='success';
    


    
    header("Location: ../visualizar.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/textstyle.css">
    <link rel="stylesheet" href="../css/select.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500,700'>
    <title>Editar</title>
</head>

<body style="background-color: #636363;">
    <?php include("../header.php");?>


    <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
       
        <div class="caja">
            <h4 style="padding: 6px;">Modificar personal:</h4>
            <div class="inputAnimate">
                <input type="number" value="<?php echo $id;?>" name="ida" required>
            </div>
            <div class="inputAnimate">
                <input type="text" value="<?php echo $name;?>" name="name" required>
            </div>
            <div class="inputAnimate">
                <input type="number" value="<?php echo $phone;?>" name="phone" required>
            </div>
            <div class="inputAnimate">
                <input type="text" value="<?php echo $adress;?>" name="adress" required>
            </div>
            <div class="custom-select" style="width:200px; margin: 5px;left: 50%; transform: translate(-50%,0);">
                <select name="job">
                    <option value="<?php echo $job;?>"><?php echo $job;?></option>
                    <option value="Jardinero">Jardinero</option>
                    <option value="Barrendero">Barrendero</option>
                    <option value="LimpiaVidrios">Limpia vidrios</option>
                </select>
            </div>

            <button class="draw" type="submit" name="update">Modificar</button>
        </div>
    </form>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="../js/text.js"></script>
    <script type="text/javascript" src="../js/select.js"></script>
</body>

</html>