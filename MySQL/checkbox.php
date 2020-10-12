<?php 
    include 'mysql.php';
    $sql = "SELECT * FROM servicios";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo '
            <div>
                <input type="checkbox" name="cb_servicios" id="Servicio_' . $row['Id_Servicio'] . '" value="' . $row['Id_Servicio'] . '">
                <label>' . $row['Nombre_Servicio'] . '</label>
            </div>';
    }
?>