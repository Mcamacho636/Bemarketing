function desplegarMenu() {
    var x = document.getElementById("myNavbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("myNavbar").style.top = "0";
    } else {
        document.getElementById("myNavbar").style.top = "-60px";
    }
    prevScrollpos = currentScrollPos;

    var scrollTop = $(window).scrollTop();
    var windows_heigth = $(window).height();
    var pathname = window.location.pathname;
    if (pathname === "/Repositorio%20BeMarketing/Bemarketing/index.php") {
        $('#myNavbar').css("background-color", "transparent");
        if (scrollTop < windows_heigth) {
            $('#myNavbar').css("background-color", "transparent");
        } else {
            $('#myNavbar').css("background-color", "#000000");
        }
    }

}