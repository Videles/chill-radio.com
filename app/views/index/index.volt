<section class="hero is-success is-fullheight">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        <span>Chill</span> Radio
      </h1>
      <h2 class="subtitle">
        Chillout, Lofi, Hip-hop and more...
      </h2>
      <div class="container-player">
        <audio id="player"></audio>
        <span>
          <div class="player-control play"></div>
          <canvas id="canvas" width="920px" height="50px"></canvas>
          <div class="player-text">Title - Artist</div>
          <input type="range" id="volume" min="0" max="100" value="50" step="1">
        </span>	
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
/*    function currentSong(){   
  $.ajax({
    url: "http://chill-radio.com/index.php/api/currentSong",
    cache: false,
    success: function(html){    
      $(".player-text").html(html);  
    },
  });
}
setInterval(currentSong, 5000);*/

$( ".recents h3" ).click(function() {
  $( ".recents ul" ).slideToggle( "slow" );
});
</script>