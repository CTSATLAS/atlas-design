<footer>
	<div class="row">
		<?php echo $this->element('featured-employers/banner') ?>
	</div>
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
					<h5>CareerSource Pinellas center in St. Petersburg</h5>
					<a href="//maps.google.com/maps?q=3420 8th Avenue South St. Petersburg, FL 33711" target="_blank">
						<img src="//maps.google.com/maps/api/staticmap?center=27.7619456,-82.6804225&zoom=14&size=380x240&maptype=roadmap&sensor=false&language=&markers=color:blue|label:none|27.7619456,-82.6804225">
					</a>
				</div>
				<div class="span4">
					<h5>
						CareerSource Pinellas center in Tarpon Springs
					</h5>
					<a href="//maps.google.com/maps?q=St. Petersburg College Campus 682 E. Klosterman Road Tarpon Springs, FL 34689" target="_blank">
						<img src="//maps.google.com/maps/api/staticmap?center=28.1229205,-82.7454361&zoom=14&size=380x240&maptype=roadmap&sensor=false&language=&markers=color:blue|label:none|28.1229205,-82.7454361" />
					</a>
				</div>
				<div class="span4">
					<h5>
						CareerSource Pinellas center at <br>Tyrone
					</h5>
					<a href="//maps.google.com/maps?q=7701 22nd Ave North St. Petersburg, FL 33710" target="_blank">
						<img src="//maps.google.com/maps/api/staticmap?center=27.7929817,-82.7445469&zoom=14&size=380x240&maptype=roadmap&sensor=false&language=&markers=color:blue|label:none|27.7929817,-82.7445469">
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
			<div class="span12 centered">
				<p>
					CareerSource Pinellas is an equal opportunity employer/program. Auxiliary aids and services are available upon request to individuals with disabilities. All voice telephone numbers listed on this website may be reached by persons using TTY/TDD equipment via the Florida Relay Service at 711. Copyright © <?= date('Y') ?> - CareerSource Pinellas. All Rights Reserved. Developed & Hosted by Complete Technology Solutions
				</p>
				<p class="eoe">ATLAS is a trademark of Complete Technology Solutions Copyright © <?= date('Y') ?> - Complete Technology Solutions. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</footer>
