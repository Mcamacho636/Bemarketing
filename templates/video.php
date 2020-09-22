
<div id="hero">
    <video autoplay preload="auto" width="100%" id="Video_Inicio">
        <source src="Assets/compressed.mp4" type="video/mp4">
        Your browser does not support the video tag.  
    </video>
    <div class="caption">
        <h1>BeMarketing</h1>
        <h2>aklsdfñk</h2>
        <img onclick="play();" src="Assets/play.png" style="width: 40px; height:40px; margin-top:80%" >
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