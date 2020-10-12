<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- LINKS A HOJAS DE ESTILO -->
    <link rel="shortcut icon" href="Assets/incono_beam.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/video.css">
    <link rel="stylesheet" href="CSS/empresas.css">
    <link rel="stylesheet" href="CSS/styles.css">

    <title>BeMarketing</title>

    <script src="Scripts/jquery-3.5.1.js"></script>
    <script src="Scripts/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="Scripts/nav.js"></script>
    <script src="Scripts/video.js"></script>
    <script src="Scripts/servicios.js"></script>
    <script src="Scripts/sql.js"></script>
    
</head>

<body onload="cambioSrc(); cargaBlogs('blog ORDER BY Id_Entrada DESC LIMIT 0 , 3', '*', 'JALSÑDKJFÑ', 'NO'); openCity(event, 'Branding');">

    <!--NavBar-->
    
    <?php require("templates/ir-arriba.php");?>
    <?php require("templates/nav.php");?>
    <?php require("templates/video.php");?>
    <?php require("pages/index.php");?>
    <?php require("templates/footer.php");?>
</body>

</html>