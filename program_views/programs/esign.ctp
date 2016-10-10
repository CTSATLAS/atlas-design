<!--[if lt IE 9]>
	<?= $this->Html->script('jsignature/flashcanvas.js') ?>
<![endif]-->
<?= $this->Html->script('jsignature/jSignature.min.js') ?>
<?= $this->Html->script('programs/esign_document') ?>

<style>
#esign p:first-child { margin:0px }

#guardian_container {
	margin-bottom: 20px !important;
	margin-top: 20px !important;
}

.tos {
	border:1px solid #CCC;
	height:150px;
	overflow-y:scroll;
	padding:10px;
}

.tos + .row {
	margin-top: 18px;
}

#sig,
#guard {
	margin: 5px 0;
	width:100%;
}

#sig > canvas,
#guard > canvas {
	border: 1px solid #000 !important;
	width:100% !important;
}

.btn-group.pull-right {
	margin-top: 18px;
	padding-right: 0;
}
</style>

<div class="row" id="esign">
	<div class="span8 offset2">
		<p>
		Please read the agreement below then sign on the signature pad with your mousedddddd
		</p>

		<div class="tos">
			<h5>
				<?= Configure::read('Company.name') ?> Acknowledgement of Electronic Signature
			</h5>
			<p>
				I, the undersigned, acknowledge and agree the use of the <?= Configure::read('Company.name') ?> (<?= Configure::read('Company.abbr') ?>)
				Electronic Signature when completing required online forms, agreements and acknowledgements for the <?= Configure::read('Company.abbr') ?>
				program(s) for which I am obtaining or seeking to obtain services. The information provided may be
				used to determine eligibility and suitability for services, to meet program participation requirements
				and post employment, follow up services.
			</p>

			<br />

			<h5>
				<?= Configure::read('Company.name') ?> General Release of Information
			</h5>

			<p>
				I hereby give my permission for <?= Configure::read('Company.name') ?> Staff to obtain and/or disclose my past, present, and future
			information or records that may be needed for eligibility determination, monitoring and follow-up purposes.
			This information may include, but shall not be limited to: school records, grade records, attendance records,
			employment information, medical records, public assistance records, employment information and vocational
			rehabilitation assessment or evaluation tools. A photocopy/facsimile of this signed consent form may be used
			to obtain/release information authorized by signature on this form.
			</p>

			<p>
				It is also my understanding that any information obtained by the above organization will be held
			in strict confidence.
			</p>

			<p>
				I understand that I may revoke this consent at any time by providing a written statement indicating
			that my consent to the release of information is no longer given to the party(ies) previously granted permission.
			</p>
		</div>

		<div class="row">
				<div class="span4">
					<p class="pull-right">
						Sign in the white box
					</p>
				</div>
				<div class="span8">
					<div id="sig"></div>
				</div>
			</div>
			<?= $this->Form->create('Program', array('action' => 'esign_document')) ?>
				<div class="row" id="guardian_container" style="margin-bottom:5px;<?= (!$under_18 ? 'display:none' : '') ?>">
					<div class="span4">
						<p class="pull-right">
							Guardian Name
						</p>
					</div>
					<div class="span4">
						<?= $this->Form->input('guardian_name', array(
							'class' => 'input-sm',
							'label' => false,
							'placeholder' => 'Enter Your Guardian\'s Name'
						)) ?>
					</div>
				</div>
				<div class="row" id="under18" style="<?= (!$under_18 ? 'display:none' : '') ?>">
					<div class="span4">
						<p class="pull-right">
							You are under 18 years of age, have a parent/guardian sign in this box:
						</p>
					</div>
					<div class="span8">
						<div id="guard"></div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<div class="btn-group pull-right">
							<?= $this->Form->hidden('signature_data') ?>
							<?= $this->Form->hidden('guardian_signature_data') ?>

							<button type="button" name="done" id="done" class="btn btn-primary">Done Signing</button>
							<button type="button" name="reset" id="reset" class="btn btn-primary">Reset</button>
						</div>
					</div>

					<div class="col-sm-4">
						<p class="error-output pull-right text-danger" style="margin-top: 21px; margin-right: 38px; color: red;"></p>
					</div>
				</div>
			<?= $this->Form->end() ?>
	</div>
</div>
