<!doctype html>  
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="assets/css/plugins.css?v=1">
  <link rel="stylesheet" href="assets/css/style.css?v=1">
  <link rel="stylesheet" href="assets/js/plugins/colorbox/v1/colorbox.css?v=1">
 
  <!-- All JavaScript at the top, we don't know if another snippet/plugin will insert js. Someone may insert JS into a TV -->
  <script src="assets/js/libs/modernizr-1.6.min.js"></script>

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/libs/jquery-1.5.2.min.js"%3E%3C/script%3E'))</script>
  <!-- end concatenated and minified scripts-->
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="assets/js/plugins.js?v=1"></script>
  <script src="assets/js/script.js?v=1"></script>
  <!-- end concatenated and minified scripts-->

</head>

<body lang="en" data-template="{{ page.template }}" data-docid="{{ page.id }}">

  <div id="container">
    <header>
      
      <a id="logo" href="/"><span>{{ site.name }}</span></a>
            
      <nav>
        <ul id="main-nav" class="sf-menu">
          <li class="first"><a href="#">Home</a>
            <ul>
              <li class="first"><a href="#">Item 2.1</a></li>
              <li><a href="#">Item 2.2</a>
              <li class="last"><a href="#">Item 2.3</a>
            </ul>
          </li>
          <li><a href="#">Item 1</a></li>
          <li class="active"><a href="#">Item 2</a>
            <ul>
              <li class="first"><a href="#">Item 2.1</a></li>
              <li><a href="#">Item 2.2</a>
              <li class="last"><a href="#">Item 2.3</a>
            </ul>
          </li>
          <li><a href="#">Item 3</a></li>
          <li class="last"><a href="#">Contact Us</a>
            <ul>
              <li class="first"><a href="#">Item 2.1</a></li>
              <li><a href="#">Item 2.2</a>
              <li class="last"><a href="#">Item 2.3</a>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    
    <div id="main" role="main" class="grid9 first">

      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div><!-- e: content -->
      
    </div><!-- e: #main -->
    

    
    <div id="side" class="grid3">
            
    </div><!-- e: #side -->
    
    <div class="clear">&nbsp;</div>
    
    <footer>
      
      <div class="copyright grid3">
        Copyright &copy; 2009-{{ now|date('Y') }}. All rights reserved<br/>
        Developed by: <a href="http://www.prowebscape.com">ProWebscape.com</a>
      </div>
      
      <div class="footer-links grid9">
        <ul id="footer-nav">
          <li class="first"><a href="#">Home</a>
            <ul>
              <li class="first"><a href="#">Item 2.1</a></li>
              <li><a href="#">Item 2.2</a>
              <li class="last"><a href="#">Item 2.3</a>
            </ul>
          </li>
          <li><a href="#">Item 1</a></li>
          <li class="active"><a href="#">Item 2</a>
            <ul>
              <li class="first"><a href="#">Item 2.1</a></li>
              <li><a href="#">Item 2.2</a>
              <li class="last"><a href="#">Item 2.3</a>
            </ul>
          </li>
          <li><a href="#">Item 3</a></li>
          <li class="last"><a href="#">Contact Us</a>
            <ul>
              <li class="first"><a href="#">Item 2.1</a></li>
              <li><a href="#">Item 2.2</a>
              <li class="last"><a href="#">Item 2.3</a>
            </ul>
          </li>
        </ul>
      </div><!-- e: .footer-links -->
      
    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix('img, .png_bg'); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->


  <!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
  <script>
   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', '{{ site.google_analytics }}']);
   _gaq.push(['_trackPageview']);
   (function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
   })();
  </script>
  
</body>
</html>
