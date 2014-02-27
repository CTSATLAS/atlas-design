<?= $this->Html->script('jquery.validate', array('inline' => false)); ?>
<?php $this->Html->scriptStart(array('inline' => false)); ?>
$(function () {
  $(".button").button();
  $("#quiz-form").validate({
    errorPlacement: function (error, element) {
      var firstLabel = element.parent('li.question').children('label')[0];
      error.insertAfter(firstLabel);
    }
  });
  $.validator.messages.required = 'Question must be answered';
});
<?php $this->Html->scriptEnd(); ?>

<div id="ecourse-quiz">
	<?= $this->Form->create(null, array('url' => '/ecourses/grade', 'id' => 'quiz-form')) ?>
	<ol class="questions">
	<?php foreach ($ecourseModule['EcourseModuleQuestion'] as $question): ?>
		<?php $answers = array() ?>
		<?php $attributes = array(
			'legend' => false,
			'separator' => '<br />',
			'class' =>  'required answer',
			'message' => 'text'
		) ?>
		<?php foreach($question['EcourseModuleQuestionAnswer'] as $answer): ?>
			<?php $answers[$answer['id']] = Sanitize::html($answer['text']) ?>
		<?php endforeach ?>
		<li class="question">
			<?= $this->Form->label(Inflector::slug($question['text']), $question['text'], array('class' => 'main-label') ); ?>
			<?= $this->Form->radio(Inflector::slug($question['text']), $answers, $attributes) ?>
		</li>
		<div class="error"></div>
	<?php endforeach ?>
	</ol>
	<?= $this->Form->hidden('module_id', array('value' => $ecourseModule['EcourseModule']['id'])); ?>
	<?= $this->Form->hidden('response_time_id', array('value' => $responseTimeId)); ?>
	<?= $this->Form->end(array('class' => 'button', 'label' => 'Submit', 'name' => 'Submit')); ?>
	
</div>
