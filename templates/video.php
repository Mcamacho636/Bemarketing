
<div id="hero">
    <video autoplay preload="auto" id="Video_Inicio">
        <source src="Assets/compressed.m4v" type="video/mp4">
        Your browser does not support the video tag.  
    </video>
    <div class="caption">
        <img onclick="play();" src="Assets/play.png" style="width: 40px; height:40px;" >
    </div>
</div>


<script> 
    var myVideo = document.getElementById("Video_Inicio"); 

    function play() { 
        if (myVideo.paused) 
            myVideo.play(); 
        else 
            myVideo.pause(); 
    } 
</script>   