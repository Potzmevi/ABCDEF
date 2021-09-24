<?php include("./database/db.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/textstyle.css">
    <link rel="stylesheet" href="./css/select.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500,700'>
    <title>Crear Administrador</title>
</head>

<body style="background-color: #636363;">
    <?php include("header.php");?>

    <?php if(isset($_SESSION['message'])){ ?>
        <div class="alert-<?=$_SESSION['message_type']?>">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <?= $_SESSION['message'] ?>
        </div>
    <?php session_unset();} ?>

    <form action="./database/save_user.php" method="POST">
       
        <div class="caja">
            <h4 style="padding: 6px;">Ingresar Administrador:</h4>
            <div class="inputAnimate">
                <input type="number" placeholder="DPI" name="id" required>
            </div>
            <div class="inputAnimate">
                <input type="text" placeholder="Nombre" name="name" required>
            </div>
            <div class="inputAnimate">
                <input type="number" placeholder="Telefono" name="phone" required>
            </div>
            <div class="inputAnimate">
                <input type="text" placeholder="Direccion" name="adress" required>
            </div>
            <div class="custom-select" style="width:200px; margin: 5px;left: 50%; transform: translate(-50%,0);">
                <select name="job">
                    <option value="Jardinero">Puesto:</option>
                    <option value="Jardinero">Jardinero</option>
                    <option value="Barrendero">Barrendero</option>
                    <option value="LimpiaVidrios">Limpia vidrios</option>
                </select>
            </div>

            <button class="draw" type="submit" name="save_user">Insertar</button>
        </div>
    </form>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="./js/text.js"></script>
    <script type="text/javascript" src="./js/select.js"></script>
</body>

</html>