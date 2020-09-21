<?php   
    $proyecto ="laSal";
    $total_imagenes = count(glob('Assets/Proyectos/'.$proyecto.'/{*.jpg,*.gif,*.png}',GLOB_BRACE));
    $direccion = "Assets/Proyectos/".$proyecto."/";
    $aux = 0;
?>
<?php echo '<h1 class="Centrar-Texto Texto-Mayusculas" style="margin-top:90px;">'.$proyecto.'</h1>'?>

<section width="100%" class="Contenido-Proyecto">
    <div class="Image-Proyecto wow animate__animated animate__fadeInDownBig animate__slow" style="width: calc(100% - 10px);">
        <?php echo '<img src="'.$direccion.'Imagen0.jpg">';?>
        <div class="Contenido-Image-Proyecto">
            <h2>Lorem</h2>
        </div>
    </div>
    <div class="Image-Proyecto wow animate__animated animate__fadeInLeftBig animate__slow" style="width: calc(60% - 10px);">
        <?php echo '<img src="'.$direccion.'Imagen1.jpg">';?>
        <div class="Contenido-Image-Proyecto">
            <h2>Lorem</h2>
        </div>
    </div>
    <?php 
        for($i = 2; $i <$total_imagenes; $i++){
            if($i%2 == 0){
                $aux ++;
            }

            if($aux%2 != 0){
    ?>  
                <div class="Image-Proyecto wow animate__animated animate__fadeInRightBig animate__slow" style="width: calc(40% - 10px);">
                    <?php echo '<img src="'.$direccion.'Imagen'.$i.'.jpg">';?>
                    <div class="Contenido-Image-Proyecto">
                        <h2>Lorem</h2>
                    </div>
                </div>
    <?php
            }else{
    ?>
                <div class="Image-Proyecto wow animate__animated animate__fadeInLeftBig animate__slow" style="width: calc(60% - 10px);">
                    <?php echo '<img src="'.$direccion.'Imagen'.$i.'.jpg">';?>
                    <div class="Contenido-Image-Proyecto">
                        <h2>Lorem</h2>
                    </div>
                </div>
    <?php 
            }
        }
    ?>
</section>