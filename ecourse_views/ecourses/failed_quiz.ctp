<?php $this->Html->scriptStart(array('inline' => false)); ?>
$(function () {
  $(".button").button();
});
<?php $this->Html->scriptEnd(); ?>

<ol id="ecourse-quiz-results">
	<?php foreach($ecourseModule['EcourseModuleQuestion'] as $question) : ?> 
		<li>
			<h5><?= Inflector::humanize($question['text']) ?></h5>
			<?php foreach($question['EcourseModuleQuestionAnswer'] as $answer) : ?>
				<?php if(in_array($answer['id'], $userAnswers) && $answer['correct']) : ?>
					<p class="correct-answer"><?= Sanitize::html($answer['text']) ?></p>
				<?php else : ?>	
					<p class="incorrect-answer"><?= Sanitize::html($answer['text']) ?> </p>
				<?php endif ?>
			<?php endforeach ?>
		</li>
	<?php endforeach ?>
</ol>
<br />
<p>
	<?php echo $this->Html->link('Return to course', '/ecourses/media/'.$ecourseModule['EcourseModule']['ecourse_id'], array('class' => 'button'))?>
</p>
