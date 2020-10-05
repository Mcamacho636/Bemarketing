<?php
    include 'mysql.php';

    $tabla = $_GET['tabla'];
    $campos = $_GET['campos'];
    $where = $_GET['where'];
    $where_status = $_GET['where_status'];

    if($where_status == 'SI'){
        $sql = "SELECT $campos FROM $tabla WHERE $where";
        $entre = "Simon";
    }else{ 
        $sql = "SELECT $campos FROM $tabla";
    }


    $result = mysqli_query($conn, $sql);

    if($tabla == 'blog' && $where_status == 'SI'){
        $rs = mysqli_query($conn, "SELECT MAX(Id_Entrada) AS id FROM blog");
        if ($row = mysqli_fetch_row($rs)) {
            $id = trim($row[0]);
        }
        while($row = mysqli_fetch_assoc($result)){
            echo "
            <div class='Titulo-Entrada Centrar-Texto' id='Contenido-Blog'>
                <h1>" . $row['Titulo'] ."</h1>
            </div>
            <div class='Blog-Categoria Categoria-Entrada ' id='categoria_entrada'>
                <h3>" . $row['Categoria'] . "</h3>
            </div>
            <div class='Fecha-Entrada' id='fecha_entrada'>
                <h3>" . $row['Fecha'] . " Por: " . $row['Autor']. "
            </div>
            <div style='width: 80%; heigth: ;'>
                <img src='Assets/Imagen3.jpg' alt='' style='height: 70%;'>
            </div>
            <div class='Cuerpo-Entrada' id='cuerpo_entrada'>
                <p> " . $row['Cuerpo'] . "</p>
            </div>";
        }
            
    }else{
        while($row = mysqli_fetch_assoc($result)) {
            echo '
            <a href="' . $row['Link'] .  '" class="zoom">
                <div class="Tarjeta-Blog-Ext">
                    <img src="Assets/Imagen3.jpg" alt="">
                    <p class="Blog-Categoria">' . $row['Categoria'] . '</p>
                    <div class="Contenido-Tarjeta-Blog-Ext">
                        <h3 class="Centrar-Texto">' . $row['Titulo'] . '</h2>
                        <h4 class="Centrar-Texto">' . $row['Fecha'] . ' By ' . $row['Autor'] . '</h4>
                        <p>' . $row['Preview'] . '</p>
                    </div>
                </div>
            </a>';
        }
    }
?>
