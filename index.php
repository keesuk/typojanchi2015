<?

include 'route.php';

$route = new Route();
$locale = 'ko';
$artwork = '';
$home_url = "/typojanchi2015";

$route->add('/', function() {
});

$route->add('/ko', function() {
});

$route->add('/en', function() {
  global $locale;
  $locale = "en";
});



$route->add('/ko/.+', function($artwork_permalink) {
  global $locale, $artwork;
  $locale = "ko";
  $artwork = $artwork_permalink;
});

$route->add('/en/.+', function($artwork_permalink) {
  global $locale, $artwork;
  $locale = "en";
  $artwork = $artwork_permalink;
});

$route->submit();

?>

<!DOCTYPE html>
<head>

  <title><? echo $locale." ".$artwork; ?></title>
  <meta charset="utf-8"></meta>


  <meta property="og:site_name" content="Typojanchi 2015"/> 
  <meta property="og:description" content="Typojanchi 2015"/> 
  <meta name="description" content="Typojanchi 2015" />

  <meta name="title" content="Typojanchi 2015"/>
  <meta property="og:title" content="Typojanchi 2015"/>

  <link rel="canonical" href="http://typojanchi.org/2015">
  <meta property="og:url" content="http://typojanchi.org/2015">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">

    
  <link rel="stylesheet" media="all" href="<? echo $home_url; ?>/stylesheets/dist/application.css"></link>

  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"></meta>
 
  <script src="<? echo $home_url; ?>/javascripts/src/vendor/jquery.js"></script> 
  <script src="<? echo $home_url; ?>/javascripts/src/vendor/underscore-min.js"></script> 
  <script src="<? echo $home_url; ?>/javascripts/src/vendor/backbone-min.js"></script> 
  <script src="<? echo $home_url; ?>/javascripts/src/vendor/jquery.columnizer.js"></script>
  <script src="<? echo $home_url; ?>/javascripts/src/vendor/js-yaml.min.js"></script>
  <script src="<? echo $home_url; ?>/javascripts/src/vendor/retina.min.js"></script>  
  <script src="<? echo $home_url; ?>/javascripts/src/WY.js"></script>
  <script src="<? echo $home_url; ?>/javascripts/src/utils.js"></script>  

  <!-- models -->
  <script src="<? echo $home_url; ?>/javascripts/src/models/template_loader.js"></script>
  <script src="<? echo $home_url; ?>/javascripts/src/models/participants_manager.js"></script>
  <script src="<? echo $home_url; ?>/javascripts/src/models/projects_manager.js"></script>

  <!-- views -->
  <script src="<? echo $home_url; ?>/javascripts/src/views/welcome_view.js"></script>

</head>
<body>
  <div id="index">
  <div id="section-header">
    <h2><a href="#">About (Typojanchi)</a></h2>
    <div id="lang-en"><a href="<? echo $home_url; ?>/en">EN</a></div>
    <div id="lang-ko"><a href="<? echo $home_url; ?>/ko">한글</a></div>
  </div>
  <div id="section-cities">
    <ul class="index-list">
      <li><a href="#">Seoul, KR</a></li>
      <li><a href="#">London, UK</a></li>
      <li><a href="#">Auckland, NZ</a></li>
      <li><a href="#">Stockholm, SE</a></li>
      <li><a href="#">Amsterdam, NL</a></li>
      <li><a href="#">Tokyo,JP</a></li>
      <li><a href="#">Osaka, JP</a></li>
      <li><a href="#">Berlin, DE</a></li>
      <li><a href="#">Rotterdam, NL</a></li>
      <li><a href="#">Porto, PT</a></li>
      <li><a href="#">Beijing, CN</a></li>
      <li><a href="#">Paris, FR</a></li>
      <li><a href="#">Derby, UK</a></li>
      <li><a href="#">Gunpo, KR</a></li>
      <li><a href="#">Los Angeles, US</a></li>
      <li><a href="#">Mexico City, MX</a></li>
      <li><a href="#">Chicago, US</a></li>
      <li><a href="#">Hong Kong</a></li>
      <li><a href="#">Taipei, TW</a></li>
      <li><a href="#">Bangkok, TH</a></li>
      <li><a href="#">Ho Chi Minh, VN</a></li>
      <li><a href="#">Singapore</a></li>
      <li><a href="#">Basel, CH</a></li>
      <li><a href="#">Montreuil, FR</a></li>
      <li><a href="#">Homer, US</a></li>
      <li><a href="#">Daegu, KR</a></li>
      <li><a href="#">New York, US</a></li>
      <li><a href="#">Paju, KR</a></li>
      <li><a href="#">New Haven, US</a></li>
      <li><a href="#">Ghent, UK</a></li>
      <li class="removeiflast">&nbsp;</li>
    </ul>
  </div>
  <div id="section-participants">
    
  </div>
  <div id="section-projects">
    
  </div>
  </div><!--index-->
  <div id="map-container">
    <iframe width="98%" height="700px" frameBorder="0" src="https://a.tiles.mapbox.com/v4/eroon26.36545472.html?access_token=pk.eyJ1IjoiZXJvb24yNiIsImEiOiJjaWY3cWhsbnkweGVuczNrcnZoNHB4dGhoIn0.oFbWC28lxCKcOIDiffQZuw"></iframe>
  </div>
  <div id="content">
    <div class="cols single">
      <ul class="index-list">
      <li><a href="#">(1)</a></li>
      <li><a href="#">— Catherine Griffiths</a></li>
      <li><a href="#">Doosup Kim</a></li>
      <li><a href="#">Byungil Choi</a></li>
      <li><a href="#">Daniel Eatock</a></li>
      <li><a href="#">Joon Soo Ha</a></li>
      <li><a href="#">Research and Development</a></li>
      <li><a href="#">Sandra Kassenaar &amp; Bart de Baets</a></li>
      <li><a href="#">Dongwan Kook </a></li>
      <li><a href="#">Kyuhyung Cho</a></li>
      <li><a href="#">Hyounyoul Joe</a></li>
      <li><a href="#">Dainippon Type</a></li>
      <li><a href="#">Yuma Harada + Shohei Iida</a></li>
      <li><a href="#">Roman Wilhelm</a></li>
      <li><a href="#">Studio Spass</a></li>
      <li><a href="#">R2</a></li>
      <li><a href="#">Till Wiedeck</a></li>
      <li><a href="#">Wang Ziyuan</a></li>
      <li><a href="#">Brownfox</a></li>
      <li><a href="#">Leslie David</a></li>
      <li><a href="#">TYMOTE/CEKAI</a></li>
      <li><a href="#">Wu Fan</a></li>
      <li><a href="#">Elodie Boyer</a></li>
      <li><a href="#">Rejane Dal Bello</a></li>
      <li><a href="#">Yi Jisung</a></li>
      <li class="removeiflast">&nbsp;</li>
    </ul>
  </div>
  <div id="artwork">
    <div class="cols triple">
      <h3 class="participant">Catherine Griffiths</h3>
      <h4 class="artwork">AEIOU—Constructed/Projected, 2005</h4>
      <p class="description">
        AEIOU—Constructed/Projected is the fourth work in the Vowel series. Constructed/Projected is a new work made in response to C(&nbsp;&nbsp;&nbsp;)T(&nbsp;&nbsp;&nbsp;), and the Biennale theme of city and typography. Layers of interaction involving collected numbers, letters, words, phrases—found and constructed—with the human body, are presented as a short film, with objects propped and stacked, nearby.
      </p>
      <p class="venue">
        <a href="#">Culture Station Seoul 284, Seoul, KR</a>
      </p>
    </div>
    <div class="cols triple artwork-photo">
      <img src="<? echo $home_url; ?>/images/img.jpg">
      <!-- need to remove gap here on the right side -->
    </div>
  </div>
  <div class="cols single">
    — <br/>
    <a href="#">Auckland, NZ</a>
  </div>
  <div style="clear: both;"></div>

  <script>
    $(document).ready(function(e){
      WY.views.welcome_view({
        home_url: "<? echo $home_url; ?>",
        locale: "<? echo $locale ?>"
      });
    });
  </script>
</body>













