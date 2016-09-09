<div class="pressReleases admin">
<div class="actions ui-widget-header">
	<ul></ul>
</div>

	<table cellpadding="0" cellspacing="0">
	    <thead class="ui-widget-header">
		<tr>
					<th class="ui-state-default"><?php echo $this->Paginator->sort('title');?></th>
					<th class="ui-state-default"><?php echo $this->Paginator->sort('created');?></th>
		</tr>
	    </thead>
	<?php
	$i = 0;
	foreach ($pressReleases as $pressRelease):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
            <td><?php echo $this->Html->link($pressRelease['PressRelease']['title'], $pressRelease['PressRelease']['file']); ?></td>
            <td><?php echo $pressRelease['PressRelease']['created']; ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>
	<br />
	.................
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
