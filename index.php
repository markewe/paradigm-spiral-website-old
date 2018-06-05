<?php
  $page = isset($_GET["p"])
    && file_exists(htmlspecialchars($_GET["p"]) . ".php")
    ? htmlspecialchars($_GET["p"]) : "news";
  $pagefile = $page . ".php";
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
  <title>Paradigm Spiral</title>    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT">
    <meta http-equiv="pragma" content="no-cache" />
    <meta property="og:image" content="img/banner.png" />
  <meta name="description" content="Official website for the Paradigm Spiral animated series." />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="css/index.css" />
  <style>
  	#kickstartermain .title
	{
		padding: 0;
	}
	
	#kickstartermain .title .sharecontainer
	{
		display: inline-block;
		float: right;
		padding: 5px;
	}
	
	#kickstartermain .title .text
	{
		display: inline-block;
		padding: 10px;
	}
  </style>
  <!-- Twitter universal website tag code -->
<script>
<!-- Twitter universal website tag code -->
<script>
!function(e,n,u,a){e.twq||(a=e.twq=function(){a.exe?a.exe.apply(a,arguments):
a.queue.push(arguments);},a.version='1',a.queue=[],t=n.createElement(u),
t.async=!0,t.src='//static.ads-twitter.com/uwt.js',s=n.getElementsByTagName(u)[0],
s.parentNode.insertBefore(t,s))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','nv4wm');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->
<!-- End Twitter universal website tag code -->
<!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');

	fbq('init', '1635779916741690');
	fbq('track', "PageView");
</script>
<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1635779916741690&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5761a42eb56e5178"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script>
  $(document).ready(function(){
    /*
    $('#menu a').click(function(){
      var self = $(this);
      
      $.post(self.attr('href') + '?d=' + (new Date().getTime())).done(function(data){
        $('#content').html(data);
        $('#menu a').removeClass('highlight');
        self.addClass('highlight');
      });
      return false;
    });
    
    $('#menu a:first').click();
    */
  });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47891160-3', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<div id="container">
	<div id="logo">
		<a href="/"><img src="img/banner.png" /></a>
	</div>
	<div id="language" style="float: right;">
		<a href="http://paradigmspiral.com">English</a>
		<div class="spacer"></div>
		<a href="http://jp.paradigmspiral.com">日本語</a>
		<div class="spacer"></div>
		<a href="http://cn.paradigmspiral.com">中国</a>
	</div>
	<div id="menu">
        <div class="border"></div>
        <div><a <? echo ($page == "news" ? "class=highlight" : "") ?> href="/?p=news">News</a></div>
        <div class="spacer"></div>
        <div><a <? echo ($page == "story" ? "class=highlight" : "") ?> href="/?p=story">Story</a></div>
        <div class="spacer"></div>
        <div><a <? echo ($page == "video" ? "class=highlight" : "") ?> href="/?p=video">Anime</a></div>
        <div class="spacer"></div>
		<div><a href="http://paradigmspiral.tumblr.com/tagged/manga" target="_blank">Manga</a></div>
        <div class="spacer"></div>
        <div><a <? echo ($page == "contact" ? "class=highlight" : "") ?> href="/?p=contact">Contact</a></div>
        <div class="spacer"></div>
        <div><a <? echo ($page == "about" ? "class=highlight" : "") ?> href="/?p=about">About</a></div>
        <div class="border"></div>
    </div>
    <div id="content">
		<!--<div id="kickstartermain" class="infobox">
			<div class="title gradienth">
				<div class="text" style="padding:10px;">Support our Kickstarter</div>
				
				<div class="sharecontainer">
					<div class="addthis_sharing_toolbox" data-url="https://www.kickstarter.com/projects/paradigmspiral/paradigm-spiral-the-animated-series"
						data-title="Support Paradigm Spiral the animated series. Now on Kickstarter!"></div>
				</div>
			</div>
			<div class="titlespacer">
				<div class="line"></div>
			</div>
			<div class="text gradientv">
				<a href="https://www.kickstarter.com/projects/paradigmspiral/paradigm-spiral-the-animated-series" target="_blank"><img style="display: block; margin: auto;" src="img/kickstarter.png" /></a>
			</div>
		</div>-->
		<?php include $pagefile ?>
	</div>
    <div id="footer"><div class="info">&copy; <?php echo date("Y"); ?> Paradigm Spiral. All Rights Reserved.</div></div>
    <!--<div id="footer"><div class="info">&copy; <?php echo date("Y"); ?> Paradigm Spiral. All Rights Reserved.</div></div>-->
</div>
</body>
</html>
