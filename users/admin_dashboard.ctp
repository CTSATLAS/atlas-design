<?php
/**
 * @author Daniel Nolan
 * @copyright Complete Technology Solutions 2010
 * @link http://ctsfla.com
 */
?>
<style>
.expand-wrap
{
	display:inline-block;
}
</style>
<?php echo $this->Html->script(array('jquery.cookie', 'jquery.jstree', 'users/dashboard'), array('inline' => false)) ?>
<div id="crumbWrapper">
    <span><?php __('You are here') ?> > </span>
    <?php echo $crumb->getHtml(__('Dashboard', true), 'reset', 'unique') ; ?>
</div>

<div id="adminDashboard" class="admin">


    <p><strong><?php __('Welcome to the administration dashboard.') ?></strong>
    </p>

    <div id="administration" class="left">
        <div>
	    <h3><?php echo $html->image('icons/user_suit.png')?> Administration</h3>
	    <p class="expand-wrap"><?php echo $this->Html->link(__('Expand All', true), '', array('id' => 'expand')) ?></p>
	    <p class="expand-wrap"><?php echo $this->Html->link(__('Collapse All', true), '', array('id' => 'collapse')) ?></p>
	    <div id="dashboardAdminTree" style="background-color: transparent">
		<ul>
            <?php echo $this->Nav->buildAdminNavigation('website') ?>
            <?php echo $this->Nav->buildAdminNavigation('settings') ?>
            <?php echo $this->Nav->buildAdminNavigation('alerts') ?>
            <?php echo $this->Nav->buildAdminNavigation('events') ?>
            <?php echo $this->Nav->buildAdminNavigation('users') ?>
            <?php echo $this->Nav->buildAdminNavigation('selfSign') ?>
            <?php echo $this->Nav->buildAdminNavigation('storage') ?>
            <?php echo $this->Nav->buildAdminNavigation('programs') ?>
            <?php echo $this->Nav->buildAdminNavigation('ecourses') ?>
            <?php echo $this->Nav->buildAdminNavigation('audits') ?>
            <?php echo $this->Nav->buildAdminNavigation('ecard') ?>
            <?php echo $this->Nav->buildAdminNavigation('tools') ?>
            <?php echo $this->Nav->buildAdminNavigation('apps') ?>
		</ul>
	    </div>
    </div>
    </div>
    <div id="information" class="left">
	    <div id='help'>
            <h3><?php echo $html->image('icons/help.png')?> <?php __('Help') ?></h3>
            <?php if($this->Session->read('Auth.User.role_id') <= 7) : ?>
							<a href="/admin/help_desk_tickets">
								<?php echo $html->image('icons/email.png')?>
								<?php __('Create an ATLAS support ticket') ?>
							</a>
	    			<?php endif ?>
					<p><?php echo $html->image('icons/telephone.png')?> 352-666-0333</p>
				<p>
						<?php echo $this->element('navigation/staff-tickets');  ?>

				</p>
	    		<p><?php echo $html->image('icons/bug.png')?> Please report issues with ATLAS to your supervisor.</p>

	    	<p>
	    		<?php echo $html->image('icons/application_xp_terminal.png')?>
	    		<?php echo $html->link('Atlas 3.8.9 Build 3', array('controller' => 'release_notes', 'admin' => true))?>
	    	</p>
	    </div>
    </div>

	<?php if ($ecourses): ?>
	<div id="ecourses" class="left">
		<div>
			<h3><?php echo $html->image('icons/report.png')?> <?php __('Your Ecourses') ?></h3>
				<a href="" id="toggle-completed">Hide Completed</a>
				<ul>
				<?php foreach ($ecourses as $ecourse): ?>
					<?php
						$moduleComplete = (isset($ecourse['Ecourse']['EcourseResponse'][0]) && $ecourse['Ecourse']['EcourseResponse'][0]['status'] == 'completed') ? true : false;
						$modules = Set::extract('/EcourseModule/id', $ecourse['Ecourse']);
						$moduleResponses = Set::extract('/EcourseResponse/EcourseModuleResponse[pass_fail=Pass]/ecourse_module_id', $ecourse['Ecourse']);
						$liClass = ($moduleComplete == true) ? 'complete' : 'incomplete';
					?>
						<li class="<?= $liClass ?>">
							<div class="title">
								<h4><?= $ecourse['Ecourse']['name'] ?></h4>
							</div>
							<div class="details">
								<i class="icon-book"></i>
								<?= count($moduleResponses) ?> of
								<?= count($ecourse['Ecourse']['EcourseModule']) ?>
								<?= (count($modules) > 1) ? 'modules' : 'module' ?>
								completed
							</div>
							<span class="action">
								<?php if (!$moduleComplete): ?>
								<a href="/ecourses/index/<?= $ecourse['Ecourse']['id'] ?>">
									<?php if (empty($moduleResponses)): ?>
										<?= (!empty($ecourse['ProgramResponse']) ? Inflector::humanize($value['ProgramResponse'][0]['status']) : 'Get Started') ?>
									<?php else: ?>
										<?= (!empty($ecourse['ProgramResponse']) ? Inflector::humanize($value['ProgramResponse'][0]['status']) : 'Continue') ?>
									<?php endif ?>
								</a>
								<?php else: ?>
								<a href="#">Completed</a>
								<?php endif ?>
							</span>
						</li>
				<?php endforeach ?>
				</ul>
		</div>
	</div>
	<?php endif ?>
	<div class="clear"></div>
</div>
