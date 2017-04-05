<footer>
	<!--<div class="container">
		<div class="row">
			<div class="span12">
				<?php echo $this->Nav->links('Bottom', true, 'footer-menu') ?>
			</div>
		</div>
	</div>-->
	<div class="maps-holder">
		<div class="container">
			<div class="row">
				<div class="span4">
					<h5 style="font-size:12pt">CareerSource Pasco | Hernando, Spring Hill</h5>
					<a href="//maps.google.com/maps?q=7361 Forest Oaks Blvd. Spring Hill, FL 34606" target="_blank">
						<img src="//maps.google.com/maps/api/staticmap?center=28.4910251,-82.5957797&amp;zoom=15&amp;size=380x240&amp;maptype=roadmap&amp;sensor=false&amp;language=&amp;markers=color:blue|label:none|28.4910251,-82.5957797">
					</a>
				</div>
				<div class="span4">
					<h5 style="font-size:11pt">CareerSource Pasco | Hernando, New Port Richey</h5>
					<a href="//maps.google.com/maps?q=4440 Grand Blvd. New Port Richey, FL 34652" target="_blank">
						<img src="//maps.google.com/maps/api/staticmap?center=28.2235843,-82.7229016&amp;zoom=15&amp;size=380x240&amp;maptype=roadmap&amp;sensor=false&amp;language=&amp;markers=color:blue|label:none|28.2235843,-82.7229016">
					</a>
				</div>
				<div class="span4">
					<h5 style="font-size:12pt">CareerSource Pasco | Hernando, Dade City</h5>
					<a href="//maps.google.com/maps?q=15000 Citrus Country Dr. Suite 303
Dade City, FL 33523" target="_blank">
						<img src="//maps.google.com/maps/api/staticmap?center=28.3768332,-82.1903938&amp;zoom=15&amp;size=380x240&amp;maptype=roadmap&amp;sensor=false&amp;language=&amp;markers=color:blue|label:none|28.3768332,-82.1903938">
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="span6 offset3">
                <?php echo $this->element('cs-attributions') ?>
			</div>
		</div>
		<div class="row copyright">
			<?php echo $this->element('footer-copy') ?>
		</div>
	</div>
</footer>
<style>

div#live-chat-box  p {
	font-size: 21px;
  border-radius: 5px;
	background-color: #2478C0;
	border: 1px dotted #fff;
	width: 250px;
	padding: 10px;
	/*padding-top: 0;*/
	text-align: center;
	margin-right: 20px;
}

div#lhc_status_container p {
		font-size: 16px !important;
		color: #fff;
}

div#lhc_status_container a {
	color: #fff;
	font-weight: bold;
}

div#lhc_status_container a:hover {
	color: #78A800;
}

.live-help {
	text-align: center;
	color: #2478C0;
	padding: 5px;
	display: block;
}
	#live-help.navbar-fixed-bottom {

		left: 82% !important;

	}

</style>
<div id="live-help" class="navbar navbar-fixed-bottom">
	<div id="live-chat-box" class="pull-right">

		<div id="lhc_status_container" ></div>
		<!-- <span class="live-help">
		 Ask our staff for Help.
		</span> -->
		<!-- Place this tag after the Live Helper status tag. -->
		<script type="text/javascript">
		var LHCChatOptions = {};
		LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
		(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
		var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
		po.src = '//careersourcepascohernando.com/livechat/index.php/chat/getstatus/(click)/internal/(position)/original/(ma)/br/(hide_offline)/true/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
		</script>
	</div>

</div>
