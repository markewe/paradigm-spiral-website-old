<style>
	#contactform
	{
		display: block;
		margin: 0 auto 60px;
		width: 540px;
	}

	#contactform label
	{
		display: block;
	}

	#contactform textarea
	{
		width: 100%;
		height: 240px;
	}
	
	#contactform input[type=submit]
	{
		font-size: 1.4em;
		margin-top: 10px;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$('form').submit(function(){
			var self = $(this);
			$.post(self.attr('action'), self.serialize()).done(function(data){
				$('<div />').html('We got your message! We\'ll get back to you as soon as we can.').dialog({
					width: 480,
					close: function( event, ui ) {$(this).dialog( "destroy" );},
					buttons: {
						OK: function() { //submit
							$(this).dialog( "destroy" );
						}
					}
				});
				
				$('form input[type=reset]').click();
			}).error(function(){
				$('<div />').html('Uh oh! Something went wrong. Try again later!').dialog({
					width: 480,
					close: function( event, ui ) {$(this).dialog( "destroy" );},
					buttons: {
						OK: function() { //submit
							$(this).dialog( "destroy" );
						}
					}
				});
			});
			
			
			return false;
		});
	});
</script>
<div class="infobox" id="contactform">
    <div class="title gradienth">Send us a Message</div>
    <div class="titlespacer">
        <div class="line"></div>
    </div>
    <div class="text gradientv">
        <form action="php/email.php">
            <div class="marginbottom">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" />
            </div>
            <div>
                <label id="emailbody">Message</label>
                <textarea id="emailbody" name="message"></textarea>
            </div>
            <input type="submit" value="Send" />
            <input type="reset" value="Reset" class="hidden" />
        </form>
    </div>
</div>
