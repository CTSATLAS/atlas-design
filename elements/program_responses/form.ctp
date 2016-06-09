<?php if ($iframe): ?>
  <?php $this->Html->scriptStart(array('inline' => false)); ?>
    $.seamless.connect({
      url: '<?= $referer ?>',
      allowStyleInjection: true,
      requireCookies: true
    });
  <?php $this->Html->scriptEnd(); ?>
<?php endif ?>

<?php if(!empty($formFields)): ?>
<?php
    foreach($formFields as $k => $v)
    {
        $options = json_decode($v['options'], true);
        $attributes = array(
            'label' => $v['label'],
            'type' => $v['type'],
            'after' => '<br />',
            'options' => $options
        );

        if($v['instructions'] != '' || $v['instructions'] != NULL) {
            $attributes['after'] = '<p class="field-instructions">' . $v['instructions'] . '</p>';
        }

        if(!empty($v['attributes'])) {
            $attributes = Set::merge($attributes, json_decode($v['attributes']));
        }
        ?>

		<?= $this->Form->input('ProgramResponseActivity.0.' . $v['name'], $attributes) ?>

		<?php

        if($this->params['action'] === 'edit_form')
        {
            echo $this->Form->input('ProgramResponseActivity.id', array('type' => 'hidden'));
        }
    }

?>
		 <?php if($acceptanceRequired) : ?>
            <fieldset>
                <legend><?php __('User Acceptance') ?></legend>
                <p class="bot-mar-10"><?php echo $acceptanceInstructions[0]; ?></p>
                <p class="bot-mar-10"><?php __('Please enter your first and last name in the box below.') ?></p>
                <?php echo $form->input('ProgramResponseActivity.0.user_acceptance', array('label' => __('I agree', true), 'after' => '<br />')) ?>
            </fieldset>
            <br />
        <?php endif ?>
       <?php if($esignRequired) : ?>
            <fieldset>
                <legend><?php __('Electronic Signature') ?></legend>
                <p class="bot-mar-10"><?php echo $esignInstructions[0]; ?></p>
                <p class="bot-mar-10"><?php __('Please enter your first and last name in the box below.') ?></p>
                <?php echo $form->input('ProgramResponseActivity.0.esign', array('label' => __('I agree', true), 'after' => '<br />')) ?>
            </fieldset>
            <br />
        <?php endif ?>
    <?php endif ?>
<?php echo $this->Form->end(array('label' => __('Submit', true), 'class' => 'btn btn-primary')); ?>
