<div class="locations">
        <?php foreach ($locations as $location): ?>
    <div class="row-fluid">       
        <div class="span6">
        <div class="right-">
			<?php
				$addressString = '';
				$addressString .= $location['Location']['address_1'];
				if (!empty($location['Location']['address_2'])) {
					$addressString .= ' ' . $location['Location']['address_2'];
				}
				$addressString .= ', ' . $location['Location']['city'] . ', ' . $location['Location']['state'] . ' ' . $location['Location']['zip'];
			?>
			<a href="http://maps.google.com/maps?q=<?php echo urlencode($addressString) ?>">
				<img src="http://maps.google.com/maps/api/staticmap?center=<?php echo urlencode($addressString) ?>&zoom=15&size=520x320&sensor=false&markers=color:blue%7C<?php echo urlencode($addressString) ?>" />
			</a>
		</div>
    </div>
    <div class="span6">
        <div class="location">
		<div class="left-">
			<address>
                            <h2><?php echo $location['Location']['public_name'] ?></h2>
			<?php echo $location['Location']['address_1']; ?><br />
			<?php echo (!empty($location['Location']['address_2'])) ? $location['Location']['address_2'] . '<br />' : ''; ?>
			<?php echo $location['Location']['city']; ?>, <?php echo $location['Location']['state']; ?>&nbsp;<?php echo $location['Location']['zip']; ?><br />
			</address>
			<?php echo $location['Location']['telephone']; ?><br />
			<?php echo $location['Location']['fax']; ?>
			<br />
			<br />
            <strong><?php __('Hours:') ?></strong><br /> <?php echo $location['Location']['hours'] ?>
			<br />
			<br />
			<?php if (!empty($location['Location']['facilities'])): ?>
			<?php echo $this->Html->link('Facilities', array('controller' => 'locations', 'action' => 'facilities', $location['Location']['id'])) ?>
			<?php endif; ?>
			
		</div>
		
		
	</div>
    </div>
</div>	
	<br class='clear' />
	<?php endforeach; ?>
          
</div>
