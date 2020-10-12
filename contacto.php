<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- LINKS A HOJAS DE ESTILO -->
    <link rel="shortcut icon" href="Assets/incono_beam.png"/>
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/styles.css">

    <title>BeMarketing</title>

    <script src="Scripts/jquery-3.5.1.js"></script>
    <script src="Scripts/nav.js"></script>
    <script src="Scripts/sql.js"></script>
</head>

<body onload="cargaServicios();">
    <!--NavBar-->
    <?php require("templates/ir-arriba.php");?>
    <?php require("templates/nav.php");?>
    <?php require("pages/contacto.php");?>
    <?php require("templates/footer.php");?>
</body>

</html>