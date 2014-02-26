<!--[if gte IE 9]>
	<style type="text/css" media="screen">
		.widget .header { filter: none; }
	</style>
<![endif]-->
<div id="dashboard">
	<?php if(!empty($eventRegistrations)) : ?>
	<div id="event-registrations" class="widget">
		<div class="widget-header">
			<h2>
				<i class="icon-file-alt"></i>
				Event Registrations
			</h2>
		</div>
		<div class="widget-content">
			<ul>
				<?php foreach($eventRegistrations as $key => $value) : ?>
				<li>
					<div class="title">
						<?= $value['Event']['name'] ?>
					</div>
					<div class="details">
						<i class="icon-calendar"></i>
						<?= date('l, F dS', strtotime($value['Event']['scheduled'])) ?>
						<i class="icon-time"></i>
						<?= date('h:iA', strtotime($value['Event']['scheduled'])) ?>
						<i class="icon-map-marker"></i>
						<?php if (isset($value['Location']['id']) && !empty($value['Location']['id'])): ?>
							<?php
								$address_parts = array();
								array_push($address_parts, $value['Location']['address_1']);
								if (isset($value['Location']['address_2']) && !empty($value['Location']['address_2']))
									array_push($address_parts, $value['Location']['address_2']);
								array_push($address_parts, $value['Location']['city']);
								array_push($address_parts, "{$value['Location']['state']} {$value['Location']['zip']}");
								$address = join($address_parts, ', ');
							?>
							<?= "{$value['Location']['name']} - {$address}" ?>
							(<a href="http://maps.google.com/maps?q=<?php echo urlencode($address) ?>"><?php __('Map It') ?></a>)
						<?php else: ?>
							<?= $value['Event']['address'] ?>
							(<a href="http://maps.google.com/maps?q=<?php echo urlencode($value['Event']['address']) ?>"><?php __('Map It') ?></a>)
						<?php endif ?>
					</div>

					<span class="action">
						<a href="/events/cancel/<?= $value['Event']['id']?>" class="button gray">Cancel Your Registration</a>
					</span>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	<?php endif ?>

	<?php if(!empty($ecourses)) : ?>
	<div id="online-ecourses" class="widget">
		<div class="widget-header">
			<h2>
				<i class="icon-tasks"></i>
				Online Ecourses
			</h2>
		</div>

		<div class="widget-content">
			<ul>
			<?php foreach($ecourses as $key => $value) : ?>
				<?php
					$moduleComplete = (isset($value['Ecourse']['EcourseResponse'][0]) && $value['Ecourse']['EcourseResponse'][0]['status'] == 'completed') ? true : false;
					$modules = Set::extract('/EcourseModule/id', $value['Ecourse']);
					$moduleResponses = Set::extract('/EcourseResponse/EcourseModuleResponse[pass_fail=Pass]/ecourse_module_id', $value['Ecourse']);
				?>
				<li>
					<div class="title">
						<a href="/ecourses/index/<?= $value['Ecourse']['id'] ?>"><?= Inflector::humanize($value['Ecourse']['name']) ?></a>
					</div>
					<div class="details">
						<i class="icon-book"></i>
						<?= count($moduleResponses) ?> of
						<?= count($value['Ecourse']['EcourseModule']) ?>
						<?= (count($modules) > 1) ? 'modules' : 'module' ?>
						completed
						<?php if ($moduleComplete): ?>
							(<a href="/ecourses/view_certificate/<?= $value['Ecourse']['EcourseResponse'][0]['id'] ?>">Download Certificate</a>)
						<?php endif ?>
					</div>

					<span class="action">
						<a href="/ecourses/index/<?= $value['Ecourse']['id'] ?>" class="button gray">
							<?php if (empty($moduleResponses)): ?>
								<?= (!empty($value['ProgramResponse']) ? Inflector::humanize($value['ProgramResponse']['status']) : 'Get Started') ?>
							<?php elseif ($moduleComplete): ?>
								<?= (!empty($value['ProgramResponse']) ? Inflector::humanize($value['ProgramResponse']['status']) : 'Completed') ?>
							<?php else: ?>
								<?= (!empty($value['ProgramResponse']) ? Inflector::humanize($value['ProgramResponse']['status']) : 'Continue') ?>
							<?php endif ?>
						</a>
					</span>
				</li>
			<?php endforeach ?>
			</ul>
		</div>
	</div>
	<?php endif ?>

	<?php if(!empty($registrations)) : ?>
	<div id="online-registrations" class="widget">
		<div class="widget-header">
			<h2>
				<i class="icon-file-alt"></i>
				Online Registrations
			</h2>
		</div>

		<div class="widget-content">
			<ul>
			<?php foreach($registrations as $key => $value) : ?>
				<li>
					<div class="title">
						<a href="/programs/registration/<?= $value['Program']['id'] ?>"><?= Inflector::humanize($value['Program']['name']) ?></a>
					</div>
					<div class="details"></div>

					<span class="action">
						<a href="/programs/registration/<?= $value['Program']['id'] ?>" class="button gray">
							<?php
								$response = $value['ProgramResponse'];

								if( $response['status'] != NULL )
								{
									echo Inflector::humanize($response['status']);
								}
								else
								{
									echo 'Get Started';
								}
							?>
						</a>
					</span>
				</li>
			<?php endforeach ?>
			</ul>
		</div>
	</div>
	<?php endif ?>

	<?php if(!empty($orientations)) : ?>
	<div id="online-orientations" class="widget">
		<div class="widget-header">
			<h2>
				<i class="icon-facetime-video"></i>
				Online Orientations
			</h2>
		</div>

		<div class="widget-content">
			<ul>
			<?php foreach($orientations as $key => $value) : ?>
				<li>
					<div class="title">
						<a href="/programs/orientation/<?= $value['Program']['id'] ?>"><?= Inflector::humanize($value['Program']['name']) ?></a>
					</div>
					<div class="details"></div>

					<span class="action">
						<a href="/programs/orientation/<?= $value['Program']['id'] ?>" class="button gray">
							<?php
								$response = $value['ProgramResponse'];

								if( $response['status'] != NULL )
								{
									echo Inflector::humanize($response['status']);
								}
								else
								{
									echo 'Get Started';
								}
							?>
						</a>
					</span>
				</li>
			<?php endforeach ?>
			</ul>
		</div>
	</div>
	<?php endif ?>

	<?php if(!empty($enrollments)) : ?>
	<div id="online-enrollments" class="widget">
		<div class="widget-header">
			<h2>
				<i class="icon-inbox"></i>
				Online Enrollments
			</h2>
		</div>

		<div class="widget-content">
			<ul>
			<?php foreach($enrollments as $key => $value) : ?>
				<li>
					<div class="title">
						<a href="/programs/enrollment/<?= $value['Program']['id'] ?>"><?= Inflector::humanize($value['Program']['name']) ?></a>
					</div>
					<div class="details"></div>

					<span class="action">
						<a href="/programs/enrollment/<?= $value['Program']['id'] ?>" class="button gray">
							<?php
								$response = $value['ProgramResponse'];

								if( $response['status'] != NULL )
								{
									echo Inflector::humanize($response['status']);
								}
								else
								{
									echo 'Get Started';
								}
							?>
						</a>
					</span>
				</li>
			<?php endforeach ?>
			</ul>
		</div>
	</div>
	<?php endif ?>

	<?php if ($esignProgram): ?>
	<?php $currentUser = $this->Session->read('Auth.User') ?>
	<div id="online-esignature" class="widget">
		<div class="widget-header">
			<h2>
				<i class="icon-pencil"></i>
				Electronic Signature
			</h2>
		</div>

		<div class="widget-content">
			<ul>
			<?php if ($currentUser['signature']): ?>
				<li>
					<div class="title">
						<?php
							$signatureModified = strtotime($currentUser['signature_modified']);
							$signatureExpires = strtotime('+365 days', $signatureModified);
						?>

						<?php if($signatureExpires <= strtotime('now')): ?>
							<p>Your enrollment in the Electronic Signature expired on <?= date('m/d/Y', $signatureExpires) ?></p>
						<?php else: ?>
							<p>You are currently enrolled until <?= date('m/d/Y', $signatureExpires) ?></p>
						<?php endif ?>
					</div>
					<div class="details"></div>
				</li>
			<?php else: ?>
				<li>
					<div class="title">
						<p>You are not currently enrolled</p>
					</div>
					<div class="details"></div>

					<span class="action">
						<a href="/programs/esign/<?= $esignProgram['Program']['id'] ?>" class="button gray">
							<?php
								$response = $value['ProgramResponse'];

								if( $response['status'] != NULL )
								{
									echo Inflector::humanize($response['status']);
								}
								else
								{
									echo 'Enroll Now';
								}
							?>
						</a>
					</span>
				</li>
			<?php endif ?>
			</ul>
		</div>
	</div>
	<?php endif ?>
</div>
