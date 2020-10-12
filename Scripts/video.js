function cambioSrc() {
    var myVideo = document.getElementById("Video_Inicio");
    if (screen.width > 750) {
        myVideo.setAttribute("src", "Assets/Video_Completo.m4v");
        myVideo.setAttribute("poster", "Assets/BeDifferent_PC.png");

    } else {
        myVideo.setAttribute("src", "Assets/Video_Responsive.m4v");
        myVideo.setAttribute("poster", "Assets/BeDifferent_Responsive.png");
        banner.setAttribute("src", "Assets/BeDifferent_Responsive.png");
    }

    var pathname = window.location.pathname;
    if (pathname === "/Repositorio%20BeMarketing/Bemarketing/index.php") {
        $('#myNavbar').css("background-color", "transparent");
    }
}

function ampliar() {
    var myVideo = document.getElementById("Video_Inicio");
    if (myVideo.requestFullscreen) {
        myVideo.requestFullscreen();
    }
}

document.addEventListener("fullscreenchange", function() {
    var myVideo = document.getElementById("Video_Inicio");
    myVideo.pause();
    myVideo.currentTime = 0;
    myVideo.play();
    if (document.fullscreenElement) {
        myVideo.muted = false;
        myVideo.controls = true;
    } else {
        myVideo.muted = true;
        myVideo.controls = false;
    }
}, false);