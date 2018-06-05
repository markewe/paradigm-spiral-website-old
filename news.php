<style>
	.leftcol
	{
		float: left;
		width: 600px;
		vertical-align: top;
		text-align: center;
	}
	
	.rightcol
	{
		float: left;
		padding-left: 10px;
		width: 395px;
	}
	
	.infobox > .text
	{
		padding: 0;
	}
	
	.newspost
	{
		padding: 10px;
		margin-bottom: 20px;
		min-height: 200px;
		text-align: left;
	}
		
	.newspost .text img
	{
		display: block;
		margin: auto;
		max-width: 320px;
	}
		
	.newspost > .title > .line,
	.social > .title > .line
	{
		height: 1px;
		margin-bottom: 10px;
		
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffbbff+0,ffffff+100&amp;1+0,0+100 */
		background: -moz-linear-gradient(left,  rgba(255,187,255,1) 0%, rgba(255,255,255,0) 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(255,187,255,1)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(left,  rgba(255,187,255,1) 0%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(left,  rgba(255,187,255,1) 0%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(left,  rgba(255,187,255,1) 0%,rgba(255,255,255,0) 100%); /* IE10+ */
		background: linear-gradient(to right,  rgba(255,187,255,1) 0%,rgba(255,255,255,0) 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffbbff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 */
	}
	
	.social
	{
		padding: 10px;
		text-align: center;
	}
	
	.social > a
	{
		padding: 0 5px;
		text-decoration: none;
	}
	
	.social > .title
	{
		text-align: left;
	}
</style>
<script>
	$(document).ready(function(){
		if(typeof twttr != 'undefined' && twttr)
		{
			twttr.widgets.load();
		}
	});
</script>
<div class="infobox">
    <div class="title gradienth">News and Updates</div>
    <div class="titlespacer">
        <div class="line"></div>
    </div>
    <div class="text">
        <div class="leftcol">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=206662769421667";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div id="fbnews" class="fb-page" data-href="https://www.facebook.com/ParadigmSpiralAnime/"
					data-tabs="timeline,events,messages"
					data-small-header="true"
					data-adapt-container-width="false"
					data-width="480"
					data-height="640"
					data-hide-cover="true" data-show-facepile="false">
					<div class="fb-xfbml-parse-ignore">
						<blockquote cite="https://www.facebook.com/ParadigmSpiralAnime/">
							<a href="https://www.facebook.com/ParadigmSpiralAnime/">Paradigm Spiral</a>
						</blockquote>
					</div>
				</div>
			<!--<div class="newspost gradientv">
                <div class="title">
                    <div class="text">RWBY Fan Panel @ Kumoricon - 09/06/2015</div>
                    <div class="line"></div>
                </div>
                <div class="text">
                    Thanks to everyone who made it out to the RWBY fan panel at Kumoricon. It was awesome
                    seeing that big of a turnout so late at night. Remember to <a class="highlight" href="./?p=contact">send us a message</a> if you
                    were interested in working with us.
                </div>
            </div>
            <div class="newspost gradientv">
                <div class="title">
                    <div class="text">And We're Live! - 09/04/2015</div>
                    <div class="line"></div>
                </div>
                <div class="text">
                    Welcome to our new website for the Paradigm Spiral anime project. Look around and click on stuff!
                </div>
            </div>-->
        </div>
        <div class="rightcol">
            <div class="social gradientv">
                <div class="title">
                    <div class="text">Follow Us</div>
                    <div class="line"></div>
                </div>
                <a href="https://www.facebook.com/ParadigmSpiralAnime" target="_blank">
                    <img src="img/facebook.png" />
                </a>
                <a href="https://twitter.com/ParadigmSpiral" target="_blank">
                    <img src="img/twitter.png" />
                </a>
                <a href="https://www.youtube.com/user/ParadigmSpiralAnime" target="_blank">
                    <img src="img/youtube.png" />
                </a>
            </div>
            <a class="twitter-timeline" href="https://twitter.com/ParadigmSpiral" data-widget-id="630993626764410880"></a>
        </div>
        <div class="clear">&nbsp;</div>
    </div>
</div>