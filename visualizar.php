<?php
include("./database/db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/textstyle.css?6.0">
    <link rel="stylesheet" href="./css/tablestyle.css">
    <link rel="stylesheet" href="./css/select.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/searchbar.css">
    <title>Visualizar</title>
</head>

<body style="background-color: #636363;">
    <?php include("header.php") ?>
    <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert-<?= $_SESSION['message_type'] ?>">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <?= $_SESSION['message'] ?>
        </div>
    <?php session_unset();
    } ?>
    <form>
        <div class="cajatabla">
            <table class="containero" style="z-index: 99;">

                <tr>
                    <th>
                        <h1>DPI</h1>
                    </th>
                    <th>
                        <h1>Nombre</h1>
                    </th>
                    <th>
                        <h1>Telefono</h1>
                    </th>
                    <th>
                        <h1>Direccion</h1>
                    </th>
                    <th>
                        <h1>Puesto</h1>
                    </th>
                    <th>
                        <h1>Creado</h1>
                    </th>
                    <th>
                        <h1>Acciones</h1>
                    </th>
                </tr>
                <tr>

                    <?php $query = "SELECT * FROM personal";
                    $result_tasks = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result_tasks)) { ?>
                        <td>
                            <h2><?php echo $row['id'] ?></h2>
                        </td>
                        <td>
                            <h2><?php echo $row['name'] ?></h2>
                        </td>
                        <td>
                            <h2><?php echo $row['phone'] ?></h2>
                        </td>
                        <td>
                            <h2><?php echo $row['adress'] ?></h2>
                        </td>
                        <td>
                            <h2><?php echo $row['job'] ?></h2>
                        </td>
                        <td>
                            <h2><?php echo $row['created'] ?></h2>
                        </td>
                        <td>
                            <a href="./database/edit.php?id=<?php echo $row['id'] ?>" style="color: white;">Editar </a>
                            <a href="./database/delete_user.php?id=<?php echo $row['id'] ?>" style="color: white;"> Eliminar</a>
                        </td>



                </tr>
            <?php } ?>




            </table>








        </div>

    </form>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="./js/text.js"></script>
    <script type="text/javascript" src="./js/select.js"></script>
</body>

</html>