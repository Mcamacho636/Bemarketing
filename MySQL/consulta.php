<?php
    include 'mysql.php';

    $tabla = $_GET['tabla'];
    $campos = $_GET['campos'];
    $where = $_GET['where'];
    $where_status = $_GET['where_status'];

    if($where_status == 'SI'){
        $sql = "SELECT $campos FROM $tabla WHERE $where";
    }else{ 
        $sql = "SELECT $campos FROM $tabla";
    }
    
    $result = mysqli_query($conn, $sql);

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
?>
