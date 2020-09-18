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
        <form action="">
            <div class="Campo-Formulario">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre">
            </div>
            <div class="Campo-Formulario">
                <label for="correo">Correo</label>
                <input type="mail" id="correo">
            </div>
            <div class="Campo-Formulario">
                <label for="mensaje">Mensaje</label>
                <textarea name="" id="mensaje" cols="30" rows="10"></textarea>
            </div>
        </form>
    </div>

    <div id="ContactoEspecifico" class="tabcontent-contacto" style="margin-bottom: 60px; display: none;">
        <h2 class=" Centrar-Texto ">Cuentanos tu proyecto</h2>
        <form action=" " class="contacto-proyecto ">
            <fieldset>
                <legend>Datos personales</legend>
                <div class="Campo-Formulario ">
                    <label for="nombre ">Nombre</label>
                    <input type="text " id="nombre ">
                </div>
                <div class="Campo-Formulario ">
                    <label for="empresa ">Empresa</label>
                    <input type="mail " id="empresa ">
                </div>
                <div class="Campo-Formulario ">
                    <label for="telefono " max="10 ">Telefono</label>
                    <input type="tel " id="telefono ">
                </div>
                <div class="Campo-Formulario ">
                    <label for="correo ">Correo</label>
                    <input type="mail " id="correo ">
                </div>
            </fieldset>
            <fieldset>
                <legend>Datos del proyecto</legend>
                <div class="Campo-Formulario ">
                    <label for="giro-empresarial ">Giro de la Empresa</label>
                    <select name=" " id="giro-empresarial ">
                        <option value=" ">Restaurante</option>
                    </select>
                </div>
                <div class="Campo-Formulario">
                    <h4>Servicios a cotizar:</h4>
                    <div>
                        <input type="checkbox" name="cb-redes-sociales " id="cb-redes-sociales "
                            value="servicio-interes ">
                        <label for="cb-redes-sociales ">Manejo de Redes</label>
                    </div>
                    <div>
                        <input type="checkbox" name="cb-fotografia " value="servicio-interes ">
                        <label for="cb-fotografia ">Fotografía</label>
                    </div>
                    <div>
                        <input type="checkbox" name="cb-paginaweb " value="servicio-interes ">
                        <label for="cb-paginaweb ">Diseño Web</label>
                    </div>
                </div>
                <br>
                <div class="Campo-Formulario ">
                    <label for="detalles-proyecto ">Detalles del Proyecto</label>
                    <textarea name=" " id="detalles-proyecto " cols="30 " rows="10 "></textarea>
                </div>
            </fieldset>
        </form>
    </div>
</main>
<section class="Contenedor-Seccion ">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.2572488276846!2d-104.32340268564081!3d19.09636728707623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d52fbdb7fc1f%3A0x4ca74d0b35a856fc!2sBeMa%20%7C%20Mx!5e0!3m2!1ses!2smx!4v1600441250909!5m2!1ses!2smx "
        width="100% " height="400px " frameborder="0 " style="border:0; " allowfullscreen=" " aria-hidden="false "
        tabindex="0 "></iframe>
</section>
<script type="text/javascript ">
document.getElementById("defaultOpen ").click();

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

(function() {
    var i, e, d = document,
        s = "script ";
    i = d.createElement("script ");
    i.async = 1;
    i.src = "https://cdn.curator.io/published/cdff4a5e-0a96-4f8c-9d68-b8b842601cc1.js ";
    e = d.getElementsByTagName(s)[0];
    e.parentNode.insertBefore(i, e);
})();
</script>