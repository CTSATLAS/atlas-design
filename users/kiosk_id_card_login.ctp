<?php
/**
 * @author Daniel Nolan
 * @copyright Complete Technology Solutions 2010
 * @link http://ctsfla.com
 * @package ATLAS V3
 */
?>
<?php echo $this->Html->scriptStart() ?>
	$(document).ready(function(){
		$('#UserSelfSignLoginForm').submit(function(){
			$('.self-sign-kiosk-button').button("disable");
			return true;
		});
		$("#UserIdCard").blur(function(){this.focus()});
	});
<?php echo $this->Html->scriptEnd() ?>
<div class="id-login-wrapper">
	<h1>
		<?php printf(__('Welcome to %s. Please swipe your %s License or ID.', true),
			Configure::read('Company.name'), Configure::read('Company.state')) ?>
	</h1>
		<div style="width: 650px; float: left">
			<div style="height: 75px; width: 650px">
				<?php echo $this->Session->flash(); ?>
			</div>
			<div>
				<p style="margin: 0 0 0 200px; width: 285px">
					<?php echo $this->Html->image('kiosk/id_sample.jpg') ?>
				</p>
				<p style="margin: 25px 0 0 210px">
					<a class="translate-button" href="/kiosk/users/self_sign_login">I'd prefer to login with my SSN</a>
				</p>
			</div>
		</div>
		<div style="float: right; width: 240px">
			<?php echo $this->Html->image('kiosk/swipe.jpg') ?>
		</div>
    <?php
	    echo $this->Session->flash('auth');
	    echo $form->create('User', array('action' => 'id_card_login', 'kiosk' => true));
	    echo $form->input('User.id_card', array(
			'before' => '<p class="left">',
			'between' => '</p><p class="left">',
			'after' => '</p><br class="clear"/>',
			'label' => false,
			'style' => 'position: absolute; left: -9999px;'
			));
	    echo $form->hidden('User.login_type', array('value' => 'kiosk'));
	    echo $form->end(array('label' => __('Login', true), 'style' => 'visibility: hidden'));
    ?>
    	<div class="survey-button">
		</div>
</div>
