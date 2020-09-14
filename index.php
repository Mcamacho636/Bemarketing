<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/carrusel.css">
    <link rel="stylesheet" href="CSS/empresas.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>BeMarketing</title>
    
    <script src="Scripts/jquery-3.5.1.js"></script>
    <script src="Scripts/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="Scripts/nav.js"></script>
    <script src="Scripts/servicios.js"></script>
    <script src="Scripts/carrusel.js"></script>
    <script src="Scripts/carrusel_automatico.js"></script>
</head>

<body onload="currentSlide(3)">

    <!--NavBar-->
    <?php require("templates/ir-arriba.php");?>
    <?php require("templates/nav.php");?>
    <?php require("templates/carrusel.php");?>
    <?php require("pages/index.php");?>
    <?php require("templates/footer.php");?>
</body>

</html>