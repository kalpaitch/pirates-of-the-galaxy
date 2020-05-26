<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Pirates of the Galaxy</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css?v2">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <style>
    @import url("https://use.typekit.net/soq1gkl.css");
  </style>

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <header>
    <div class="navbar navbar-light bg-light shadow-sm">
      <div class="container d-flex justify-content-between">

        <a href="http://www.hackneypirates.org/" class="navbar-brand">
          <img alt="" src="/img/lp_logo.png" class="brand-logo hidden-xs-down">
        </a>
      </div>
    </div>
  </header>

  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1>Pirates of the Galaxy</h1>

        <blockquote class="blockquote">
          <p class="mb-1">Hello, my name is Keyuna and I go to the Haringey Pirates. Every week in the lockdown I do the Literacy Pirates writing challenges, and for this project we have invented our own planets and described how they are. I hope you enjoy listening to them!</p>
          <footer class="blockquote-footer">Keyuna, <cite title="Source Title">Young Pirate</cite></footer>
        </blockquote>

        <iframe width="761" height="428" src="https://www.youtube.com/embed/b170IHzATNo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <br><br>

        <blockquote class="blockquote">
          <p class="mb-1">Welcome to The Pirates' Guide to The Galaxy, a place where you can explore imaginary worlds without even leaving your chair! Each planet has been invented and described by a participant of The Literacy Pirates who were asked to write and record pieces that would help transport their listener to a far away place where they could feel calm and relaxed. Click on the video below to hear children's author Konnie Huq tell us more about the project.</p>
          <footer class="blockquote-footer">Andrew, <cite title="Source Title">Ship Captain</cite></footer>
        </blockquote>
      </div>
    </section>

    <div id="planets" class="album py-5">
      <video autoplay muted loop class="video">
        <source src="img/bg_full.mp4" type="video/mp4">
      </video>

      <div class="container flex-grid">
        <div class="grid-sizer"></div>

          <?php
          // Planet types
          $planet_types = ['pk', 'pr', 'b', 't', 'g', 'y', 'o', 'r'];
          $planet_numbers = ['1', '2', '3', '4'];
          ?>

          <?php // Iterate on the loop.
          if ($handle = opendir('./audio')) {
              while (false !== ($filename = readdir($handle))) {
                  if ($filename != "." && $filename != ".." && !is_dir($filename)) {
                      $planet_class = 'planet-' . $planet_types[array_rand($planet_types)] . $planet_numbers[array_rand($planet_numbers)];
                      $name_components = explode(':', pathinfo($filename, PATHINFO_FILENAME));
                      list($name, $title) = $name_components;
                      $section = <<<EOD
        <div class="grid-item">
          <a data-action="freddie-story" class="planet {$planet_class}">
            <p class="name">{$name}</p>
            <p class="title">{$title}</p>
          </a>

          <audio class="story" id="freddie-story">
            <source src="/audio/{$filename}">
            Your browser does not support the audio element.
          </audio>
        </div>
EOD;
                      echo $section;
                  }
              }
          }
          ?>


      </div>
    </div>

  </main>

  <footer class="text-muted text-light">
    <div class="container">
      <p class="float-right">
        <a href="#">Back to top</a>
      </p>
      <p>Pirates of the Galaxy is &copy; <a href="http://www.hackneypirates.org/">Literary Pirates</a> 2020</p>
    </div>
  </footer>


  <!-- Script tags -->
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="node_modules/isotope-layout/dist/isotope.pkgd.js"></script>
  <script src="node_modules/bounce.js/bounce.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
