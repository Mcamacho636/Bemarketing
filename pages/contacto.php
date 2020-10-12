<section class="Contenedor-Seccion Contenido-Portafolio" styles="margin-top:6rem;">
    <img src="Assets/Imagen4.jpg" alt="">
    <div class="text-block">
        <h1>Gracias por elegirnos</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia placeat rerum consectetur fugit, tempore
            illum nobis facilis reiciendis!</p>
    </div>
</section>
<main class="Contenedor-Seccion Contenido-Contacto-Form" style="height: auto;"> 
    <div class="tab-contacto">
        <button class="tablinks-contacto" onclick="cambiarTab(event, 'ContactoGeneral')" id="defaultOpen">Contacto
            General</button>
        <button class="tablinks-contacto" onclick="cambiarTab(event, 'ContactoEspecifico')">Proyecto</button>
    </div>

    <div id="ContactoGeneral" class="tabcontent-contacto" id="defaultOpen" style="margin-bottom: 60px;">
        <h2 class="Centrar-Texto ">Contacto General</h2>
        <form action="return false" name="contacto_general" id="contacto_general" onsubmit="return false">
            <div class="Campo-Formulario">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre_general" name="nombre_general">
            </div>
            <div class="Campo-Formulario">
                <label for="correo">Correo</label>
                <input type="text" id="correo_general" name="correo_general">
            </div>
            <div class="Campo-Formulario">
                <label for="mensaje">Mensaje</label>
                <textarea name="" id="mensaje_general" name="mensaje_general" cols="30" rows="10"></textarea>
            </div>
            <div class="alert-fail" id="alert-fail" style="display: none;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>¡No se pudo enviar el mensaje!</strong> Llena todos los campos.
            </div>
            <div class="alert-succes" id="alert-succes" style="display: none;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>¡Mensaje enviado!</strong>
            </div>
            <button id="button" class="boton-formulario" onclick="insertar('contacto_general','Nombre, Correo, Mensaje', 'general');">Enviar</button>
        </form>
    </div>

    <div id="ContactoEspecifico" class="tabcontent-contacto" style="margin-bottom: 60px; display: none;">
        <h2 class=" Centrar-Texto ">Cuentanos tu proyecto</h2>
        <form action="return false" name="contacto_proyecto" onsubmit="return false" class="contacto-proyecto ">
            <fieldset>
                <legend>Datos personales</legend>
                <div class="Campo-Formulario ">
                    <label for="nombre ">Nombre</label>
                    <input type="text" id="nombre_proyecto">
                </div>
                <div class="Campo-Formulario "> 
                    <label for="empresa ">Empresa</label>
                    <input type="text" id="empresa_proyecto">
                </div>
                <div class="Campo-Formulario ">
                    <label for="telefono " max="10 ">Telefono</label>
                    <input type="tel" id="telefono_proyecto">
                </div>
                <div class="Campo-Formulario ">
                    <label for="correo ">Correo</label>
                    <input type="mail" id="correo_proyecto">
                </div>
            </fieldset>
            <fieldset>
                <legend>Datos del proyecto</legend>
                <div class="Campo-Formulario ">
                    <label for="giro_proyecto">Giro de la Empresa</label>
                    <input type="text" id="giro_proyecto">
                </div>
                <div class="Campo-Formulario" id="check-box">
                    
                </div>
                <br>
                <div class="Campo-Formulario ">
                    <label for="detalles_proyecto ">Detalles del Proyecto</label>
                    <textarea name=" " id="detalles_proyecto" cols="30 " rows="10 "></textarea>
                </div>
            </fieldset> 
            <div class="alert-fail" id="alert-fail-1" style="display: none;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>¡No se pudo enviar el mensaje!</strong> Llena todos los campos.
            </div>
            <div class="alert-succes" id="alert-succes-1" style="display: none;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>¡Mensaje enviado!</strong>
            </div>
            <div class="Campo-Formulario ">
                <button id="button-1" class="boton-formulario" onclick="insertar('contacto_proyecto','Nombre, Empresa, Telefono, Correo, Giro_Empresarial, Detalles', 'proyecto');">Enviar</button>
            </div>
        </form>
    </div>
    
</main>
<section class="Contenedor-Seccion ">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.2572488276846!2d-104.32340268564081!3d19.09636728707623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d52fbdb7fc1f%3A0x4ca74d0b35a856fc!2sBeMa%20%7C%20Mx!5e0!3m2!1ses!2smx!4v1600441250909!5m2!1ses!2smx "
        width="100% " height="400px " frameborder="0 " style="border:0; " allowfullscreen=" " aria-hidden="false "
        tabindex="0 "></iframe>
</section>
<script>
    document.getElementById("defaultOpen").click();
    function cambiarTab(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent " and hide them
        tabcontent = document.getElementsByClassName("tabcontent-contacto ");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none ";
        }

        // Get all elements with class="tablinks " and remove the class "active "
        tablinks = document.getElementsByClassName("tablinks-contacto ");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active ", " ");
        }

        // Show the current tab, and add an "active " class to the button that opened the tab
        document.getElementById(cityName).style.display = "block ";
        evt.currentTarget.className += " active ";
    }
</script>