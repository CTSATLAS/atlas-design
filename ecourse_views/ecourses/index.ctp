<?php $this->Html->scriptStart(array('inline' => false)); ?>
  $(function() {
	  $(".button" ).button();
  });
<?php $this->Html->scriptEnd(); ?>
<div id="instructions"><?php echo $ecourse['Ecourse']['instructions'] ?></div>
<br />
<div>
	<a class="button" href="/ecourses/media/<?php echo $ecourse['Ecourse']['id'] ?>">Continue</a>
</div>
