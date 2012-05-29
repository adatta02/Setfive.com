<?php 

	$key = substr( $_SERVER["REQUEST_URI"], 1 );
	if( $key === false ){ $key = "home"; }
	
	$subkey = "";
	if( strpos($key, "/") !== false ){
	  $parts = explode("/", $key);
	  $key = $parts[ 0 ];
	  $subkey = $parts[ 1 ];
	}
	
	switch( $key ){
	  case "services": $key = "consulting"; break;
	  case "about": $key = "team"; break;
	  default: break;
	}
	
	$SUBKEY_TITLES = array(
	  "web-application" => "Web Application Development",
		"startup" => "Startup",
	  "symfony" => "Symfony",
    "metatrader-4-integrations"=>"MetaTrader 4(MT4) Integrations",
	  "performance" => "Performance",
	  "salesforce" => "Salesforce",
	  "ashish-datta" => "Ashish Datta - Partner",
	  "matt-daum" => "Matt Daum - CEO",
	  "forex-tv" => "ForexTV",
	  "wegov" => "WeGov",
	  "truly" => "tru.ly",
	  "banyanlink" => "BanyanLink",
	  "acquia" => "Acquia",
	  "chatthreads" => "ChatThreads",
	  "cvet" => "CVET",
	  "datapoint-media" => "Datapoint Media",
	  "fanfeedr" => "FanFeedr",
	  "gallery-leather" => "Gallery Leather",
	  "bigfish" => "BIGfish",
	  "hercampus" => "Her Campus",
	  "hunt-and-gather" => "Hunt and Gather",
	  "museum-of-fine-arts" => "The Museum of Fine Arts",
	  "omnistrat" => "OmniStrat",
	  "onezero-financial" => "oneZero Financial",
	  "pagecoop" => "Pagecoop",
	  "purpose-beverages" => "Purpose Beverages",
	  "tufts-university" => "Tufts University"
	);
	
	$ROUTING = array(
		"home" => "Home",
	  "consulting" => "Consulting",
	  "team" => "Team",
	  "ventures" => "Ventures",
	  "clients" => "Clients",
    "clients2" => "Clients",
	  "contact" => "Contact"
	);
	
?>

<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Setfive Consulting | <?php echo $ROUTING[ $key ]; ?>
  	<?php if( $subkey ): ?>
  		> <?php echo $SUBKEY_TITLES[$subkey]; ?>
  	<?php endif; ?>
  </title>
    
  <meta name="keywords" content="symfony, Boston, consulting, php, javascript, web2.0" />
  <meta name="description" content="Symfony consulting evolved. Setfive prides itself on being different. No offshoring. No subcontracting. At Setfive, you'll meet with who is building your project." />
  <meta name="author" content="Setfive Consulting LLC">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico">
  <link href='http://fonts.googleapis.com/css?family=Nunito&v1' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Molengo&v1' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/css/style.css?v=2">
  <script src="/js/modernizr-2.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="/js/jquery.colorbox-min.js"></script>

</head>

<body>

  <div id="container" class="container">
    <header>
        <div id="header">
            <div class="logo alpha grid_5"><a href="/"><img alt="setfive.com" title="Setfive.com" src="/logo.png"></a></div>
            <div class="topnav">
            	<nav>
            	<ul class="listless inline">
    			    	<li><a <?php echo ( $key == "home" ? "class='selected'" : "" ); ?> href="/">home</a></li>
    			    	<li><a <?php echo ( $key == "consulting" ? "class='selected'" : "" ); ?> href="/consulting">consulting</a></li>
    			    	<li><a <?php echo ( $key == "clients" ? "class='selected'" : "" ); ?> href="/clients">clients</a></li>
                        <?php if( 0 ): ?>
    			    	    <li><a <?php echo ( $key == "ventures" ? "class='selected'" : "" ); ?> href="/ventures">ventures</a></li>
                        <?php endif; ?>
    			    	<li><a <?php echo ( $key == "team" ? "class='selected'" : "" ); ?> href="/team">team</a></li>
    			    	<li><a href="http://shout.setfive.com">blog</a></li>
    			    	<li><a <?php echo ( $key == "contact" ? "class='selected'" : "" ); ?> href="/contact">contact</a></li>
    			    </ul>
    			    </nav>
            </div>
        </div>
    </header>
    
    <div id="main" role="main">
        <?php 
        	if( array_key_exists($key, $ROUTING) && file_exists($key . ".php") ):
        		require_once $key . ".php";
        	else: ?>
        
        <div class="four404 error centered big">
            Sorry :( That is a 404
        </div>
        		
        <?php endif; ?>
    </div>
    
    <footer>
        <div class="footer">
            <div class="alpha grid_5">
                <h1 class='yellow-banner'>No "bs." Just results.</h1>
            </div>
            <div class="omega alpha grid_4 right">
                <ul class="listless">
                    <li>Setfive Consulting, LLC</li>
                    <li>262 Hampshire St.</li>
                    <li>Cambridge, MA 02139</li>
                    <li><a href="mailto: contact@setfive.com">contact@setfive.com</a> | 617.863.0440 | <a target="_blank" href="http://www.twitter.com/setfive">@setfive</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </footer>
  </div>

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  
  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");</script>
  <![endif]-->

  <script type="text/javascript">
    var _gaq=[["_setAccount","UA-3761258-2"],["_trackPageview"]]; 
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));

    $(document).ready( function(){
        
        var path = window.location.pathname;
        var url = window.location.href;
        var parts = path.split("/");
        
        if( parts.length > 1 ){
            $("a[href='" + path + "']:first").addClass("current");
        }
        
    });
  </script>
  
</body>
</html>