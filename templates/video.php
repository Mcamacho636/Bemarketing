
<div id="hero">
    <video autoplay controls preload="auto" id="Video_Inicio" poster="Assets/Imagen1.jpeg">
        <source src="" type="video/mp4">
        Your browser does not support the video tag.  
    </video>
    <div class="d-none" id="imagen-fondo">
        <img id="banner_video" alt="">  
        <div class="centered">
            <img src="Assets/play2.png" alt="" style="width=50px; height=50px;" onclick="play();">
        </div>
    </div>
    
</div> 
<script>
    
var myVideo = document.getElementById("Video_Inicio");
var div_img = document.getElementById("imagen-fondo"); 
var banner = document.getElementById("banner_video");

function cambioSrc(){
    if(screen.width > 750){
        myVideo.setAttribute("src", "Assets/Video_Completo.m4v");
        myVideo.setAttribute("poster", "Assets/BeDifferent_PC.png");
        banner.setAttribute("src", "Assets/BeDifferent_PC.png");

    }else{
        myVideo.setAttribute("src", "Assets/Video_Responsive.m4v");
        myVideo.setAttribute("poster", "Assets/BeDifferent_Responsive.png");
        banner.setAttribute("src", "Assets/BeDifferent_Responsive.png");
    }

    var pathname = window.location.pathname;
    if (pathname === "/Repositorio%20BeMarketing/Bemarketing/index.php") {
        $('#myNavbar').css("background-color", "transparent");
    }
}

document.getElementById('Video_Inicio').addEventListener('ended', handlerVideo, false);
function handlerVideo(e) {
     myVideo.className= "d-none"; //Agregar clase
        
    div_img.className = ""; //Quitar clase
}

function play(){
    myVideo.className = "";
    div_img.className = "d-none";
    myVideo.play();
}
</script>
