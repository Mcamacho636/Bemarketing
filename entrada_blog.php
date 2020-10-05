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
    <?php 
        $entrada = $_GET['Entrada'];
        echo "<script>
            window.onload = cargaBlogs('blog', '*', 'Id_Entrada=$entrada', 'SI');
        </script>";
    ?>
    <script>
        
    </script>
    
</head>
<body>
    <?php require("templates/ir-arriba.php");?> 
    <?php require("templates/nav.php");?>
    <?php require("pages/entrada_blog.php");?>
    <?php require("templates/footer.php");?>
    <?php 
        $siguiente = $entrada + 1;
        $anterior = $entrada - 1;
        if($anterior <= 0){
            echo "
                <script>
                    $( document ).ready(function() {
                        $( '#preview' ).css('display', 'none');
                    });
                </script>
            ";
        }
        echo "
            <script>
                $( document ).ready(function() {
                        $( '#preview' ).attr('href', 'entrada_blog.php?Entrada=$anterior');
                        $( '#next' ).attr('href', 'entrada_blog.php?Entrada=$siguiente');
                        if($siguiente > 4){
                            $( '#next' ).css('display', 'none'); 
                        }
                });
            </script>
        ";

    ?>
</body>

</html>