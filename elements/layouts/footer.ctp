<!--core-->
<footer>
    <!--<div class="container">
		<div class="row">
			<div class="span12">
				<?php echo $this->Nav->links('Bottom', true, 'footer-menu') ?>
			</div>
		</div>
	</div>-->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span6 offset4">
                <?php echo $this->element('cs-attributions') ?>
            </div>
        </div>
        <div class="row-fluid copyright">
            <div class="span12 centered">
                <p><?php echo Configure::read('Company.name') ?> is an equal opportunity employer/program. Auxiliary aids and services are available upon request to individuals with disabilities. All voice telephone numbers listed on this website may be reached by persons using TTY/TDD equipment via the Florida Relay Service at 711. Copyright © 2014 - <?php echo Configure::read('Company.name') ?>. All Rights Reserved. Developed & Hosted by Complete Technology Solutions</p>
                <p class="eoe">ATLAS is a trademark of Complete Technology Solutions Copyright © <?= date('Y') ?> - Complete Technology Solutions. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
