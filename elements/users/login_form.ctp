<?= $this->Form->create('User', array(
	'url' => $this->here,
	'inputDefaults' => array(
		'class' => 'form-control',
		'div'   => array('class' => 'form-group'),
		'label' => array('class' => 'control-label')
	)
)) ?>

<?php $params = $this->params['pass'] ?>
<?php if ( isset($params[0]) && $params[0] == 'program' && isset($params[1])): ?>
		<?= $this->Form->hidden( 'User.program_id', array('value' => $params[1])) ?>
<?php endif ?>

<?= $this->Form->hidden('User.login_type', array('value' => $type)) ?>
<?= $this->Form->input('username', array('label' =>__('Email', true))) ?>
<?= $this->Form->input('password', array('label' => __('Password', true))) ?>
<?= $this->Html->link('Forgot Password?', array('controller' => 'users', 'action' => 'forgot_password'), arraY('class' => 'pull-left')) ?>

<?= $this->Form->end( array('label' => 'Login', 'class' => 'pull-right login-submit btn btn-primary')) ?>