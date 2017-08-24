<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="libraries/font-awesome/css/font-awesome.min.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/visualizer.js"></script>
  <script type="text/javascript">
    var initialized = false;
    window.onload = function() {
      var player = $("audio")[0];
      $("audio")[0].crossOrigin = "anonymous";
      $("audio")[0].src = "http://chill-radio.com:8200/chill";
      if (!initialized) {
        initializeVisualizer($("canvas")[0], $("audio")[0]);
        initialized = true;
      }
      currentSong();
    };

    $(document).on('input change', '#volume', function() {
      $("audio")[0].volume = $(this).val() / 100;
    });

    $(document).on("click", ".player-control", function() {
      if ($(this).hasClass('play')) {
        $(this).removeClass('play');
        $(this).addClass('stop');
        $("audio")[0].src = "http://chill-radio.com:8200/chill";
        $("audio")[0].play();
      }
      else if ($(this).hasClass('stop')) {
        $(this).removeClass('stop');
        $(this).addClass('play');
        $("audio")[0].pause();
      }
    });
  </script>
  <link href="css/bulma.css" rel="stylesheet" type="text/css"/>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <title>Chill Radio</title>
</head>
<body>
<?= $this->getContent() ?>
</body>
</html>