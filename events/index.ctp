<script type="text/javascript">
var flash = '<?php echo addslashes($this->Session->read('Message.flash.message')) ?>';
</script>
<?php echo $this->Html->script('events/navigation.js', array('inline' => true)) ?>
<div id="events">
	<div class="filters">
		<form class="event_categories" action="<?= $this->Url->currentUrl(); ?>" method="get">
		<table>
			<tr>
				<td>
<label class="event_categories_label" for="category_id"><?php __('Filter by event category') ?>:</label>
			<select id="event_categories_dropdown" name="category_id">
			<option value="">All Categories</option>
			<?php foreach($categories as $category): ?>
				<option 
					value="<?= $category['EventCategory']['id'] ?>"
					<?= $selectedCategory == $category['EventCategory']['id'] ? 'selected' : '' ?>
					>
					<?= $category['EventCategory']['name'] ?>
				</option>

			<?php endforeach ?>
			</select>
				</td>
				<td>

			<label class="event_locations_label" for="location_id"><?php __('Filter by event location') ?>:</label>
			<select id="event_locations_dropdown" name="location_id">
			<?php foreach($locations as $id => $location): ?>
				<option value="<?= $id ?>"<?= ($id == $selectedLocation) ? ' selected="selected"' : '' ?>><?= $location ?></option>
			<?php endforeach; ?>
			</select>

				</td>
			</tr>
		</table>
			
			<input type="submit" class="button gray" id="reset_filters" value="<?php __('Reset Filters') ?>" />
			<input type="submit" class="button green" id="filter_submit" value="<?php __('Go') ?>" />
		</form>
	</div>
    
    
    
    <div class="alert alert-info text-center">
        Must register where indicated below
    </div>
   
	<div class="calnav events monthly">
		<a href="<?= $prevMonthUrl ?>" id="previous-month" class="button gray">
			<i class="icon-chevron-left"></i>
			Previous Month
		</a>

		<h2>Events for <?= $curMonth ?></h2>

		<a href="<?= $nextMonthUrl ?>" id="next-month" class="button gray">
			Next Month
			<i class="icon-chevron-right"></i>
		</a>
	</div>
	<?php if (!empty($events)): ?>
		<?php $event_start_date = strtotime($events[0]['Event']['scheduled']) ?>
		<div class="event-start-date">
			<h2>
				<i class="icon-calendar"></i>
				<?= date('l, F dS Y', $event_start_date) ?>
			</h2>
		</div>
		<?php foreach ($events as $event): ?>
			<?php $day = date('l, F dS', strtotime($event['Event']['scheduled'])) ?>
			<?php $month = date('M', strtotime($event['Event']['scheduled'])) ?>
			<?php $startTime = strtotime($event['Event']['scheduled']) ?>
			<?php $mins = ($event['Event']['duration'] / .25) * 15 ?>
			<?php $endTime = strtotime("$mins minutes", $startTime) ?>
			<?php $event_start_date = strtotime($events[0]['Event']['scheduled']) ?>

			<?php if (strtotime(date('m/d/Y', strtotime($event['Event']['scheduled']))) > $event_start_date): ?>
			<?php $event_start_date = strtotime(date('m/d/Y', strtotime($event['Event']['scheduled']))) ?>
			<div class="event-start-date">
				<h2>
					<i class="icon-calendar"></i>
					<?= date('l, F dS Y', $event_start_date) ?>
				</h2>
			</div>
			<?php endif ?>

			<div class="event">
				<div class="details">
					<?php if ($event['Event']['allow_registrations']): ?>
					<div class="attend">
						<?php if (in_array($event['Event']['id'], $userEventRegistrations)): ?>
							<a href="/events/cancel/<?= $event['Event']['id'] ?>/workshop" class="button green">Cancel Your Registration</a>
						<?php else: ?>
							<a href="/events/attend/<?= $event['Event']['id'] ?>/workshop" class="button green">Attend This Event</a>
						<?php endif ?>
						<p class="availibility">
							<i class="icon-group icon-large"></i>
							<?php $seatsTaken = $event['Event']['seats_available'] - $event['Event']['event_registration_count'] ?>
							<?= $seatsTaken ?>
							of
							<?= $event['Event']['seats_available'] ?>
							seats still available
						</p>
					</div>
					<?php endif ?>

					<h2><?= $event['Event']['name'] ?></h2>
					<ul>
						<li><?= $event['EventCategory']['name'] ?></li>
					</ul>
					<ul>
						<li>
							<i class="icon-time icon-large"></i>
							<span class="datetime">
								<?= date('h:iA', $startTime) ?> &ndash;
								<?= date('h:iA', $endTime) ?>
							</span>
						</li>
						<li>
							<i class="icon-map-marker icon-large"></i>
							<?php if (isset($event['Location']['id']) && !empty($event['Location']['id'])): ?>
								<?php
									$address_parts = array();
									array_push($address_parts, $event['Location']['address_1']);
									if (isset($event['Location']['address_2']) && !empty($event['Location']['address_2']))
										array_push($address_parts, $event['Location']['address_2']);
									array_push($address_parts, $event['Location']['city']);
									array_push($address_parts, "{$event['Location']['state']} {$event['Location']['zip']}");
									$address = join($address_parts, ', ');
								?>
								<strong><?= $event['Location']['name'] ?></strong> - <?= $address ?>
								(<a href="http://maps.google.com/maps?q=<?= urlencode($address) ?>"><?php __('Map It') ?></a>)
							<?php else: ?>
								<?= $event['Event']['address'] ?>
								(<a href="http://maps.google.com/maps?q=<?= urlencode($event['Event']['address']) ?>"><?php __('Map It') ?></a>)
							<?php endif ?>
						</li>
					</ul>

					<?php if (isset($event['Event']['url']) && !empty($event['Event']['url'])): ?>
					<ul>
						<li>
							<i class="icon-globe icon-large"></i>
							<a href="<?= $event['Event']['url'] ?>">
								<?= $event['Event']['url'] ?>
							</a>
						</li>
					</ul>
					<?php endif ?>

					<p class="description"><?= $event['Event']['description'] ?></p>

					<?php if (!empty($event['Event']['sponsor'])): ?>
					<p class="sponsor">
						This Event is Sponsored By
						<?php if (!empty($event['Event']['sponsor_url'])): ?>
						<a href="<?= $event['Event']['sponsor_url'] ?>"><?= $event['Event']['sponsor'] ?></a>
						<?php else: ?>
						<?= $event['Event']['sponsor'] ?>
						<?php endif ?>
					</p>
					<?php endif; ?>

					<p class="event_links">
						<?php if (!empty($event['Event']['event_url'])): ?>
						<a href="<?= $event['Event']['event_url'] ?>"><?php __('Visit Website') ?></a>
						<?php endif; ?>
						<?php if (!empty($event['Event']['address'])): ?>
						<?php endif; ?>
					</p>
				</div>
			</div>
			<div class="clear"></div>
		<?php endforeach; ?>
	<?php else: ?>
			<div class="no-events">
			<p><?php __('No events to display') ?></p>
			</div>
	<?php endif; ?>

	<?php //echo $this->element('frontend_pagination') ?>
</div>
<div id="dialog-message" title="Event Attendence" style="display:none">
	<p>
		<i class="fa fa-check" style="float:left;margin:0px 5px 20px 0px;font-size:18pt"></i>
		<span class="flash-message" style="font-size:12pt"></span>
	</p>
</div>
