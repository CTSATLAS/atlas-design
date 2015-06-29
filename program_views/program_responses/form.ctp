<?php echo $html->script('program_responses/toggle_instructions', array('inline' => false)) ?>
  <div class="show-instructions" style="display:none">
    <a href="#" ><?php __('Show instructions') ?></a>
  </div>

  <?php if(isset($instructions) && $instructions != NULL): ?>
    <div id="instructions">
      <?php echo $instructions ?>
      <div class="hide-instructions">
        <a href="#"><?php __('Hide these instructions') ?></a>
      </div>
    </div>
  	<noscript>
  		<div id="instructions"><?php echo $instructions ?></div>
  	</noscript>
  <?php endif ?>

<br />

<div class="required bot-mar-10"><label></label> <?php __('indicates required fields.') ?></div>
<div id="ProgramForm">
	<?php echo $form->create('ProgramResponse', array('action' => 'form/' . $this->params['pass'][0] . '/' . $this->params['pass'][1])); ?>
	<?php echo $this->element('program_responses/' . $element) ?>
</div>
<pre>
  <?php var_dump($data); ?>
</pre>
