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
    p {
        margin-bottom: 40px;
    }
</style>

<div class="row" id="esign">
	<div class="span8 offset2">
		<p>
		Please read the agreement below then sign on the signature pad with your mouse
		</p>

		<div class="tos">
			<h5>
				<?= Configure::read('Company.name') ?> Acknowledgement of Electronic Signature
			</h5>
            <h4>RELEASE OF INFORMATION</h4>
            <p>I hereby authorize all partners in the Citrus Levy Marion Regional Workforce Development Board’s, dba CareerSource Citrus Levy Marion, system to engage in verbal, written, facsimile, or computerized communication of information for the purpose of making me eligible for services or for identifying services or agencies to assist me. All pertinent records and information can be released including those regarding past, present, or future information or records that may be needed for eligibility determination, monitoring or follow-up purposes. It is my understanding that any information obtained by any partner in the CareerSource Citrus Levy Marion’s system will be held in strict confidence. I am aware that any information will be used in my best interest to provide ease of access to services; that providing the information is voluntary; that the information will be kept confidential and used only in accordance with law; and that refusal to provide the information will not subject me to any adverse treatment.</p>
           <h4>ATTESTATION</h4>
            <p>I hereby certify, to the best of my knowledge, the information provided is true. I agree and understand any willful misstatement of facts may cause forfeiture of my status in CareerSource Citrus Levy Marion programs and could be cause for legal action. I understand the information is subject to verification and agree to provide such documentation as required. I understand my social security number may be given to other federal, state, and local government or non-government job training agencies for performance tracking purposes.</p>
            <h4>DISCRIMINATION PROCEDURES</h4>
            <p>If you, as a CareerSource Citrus Levy Marion customer, feel that your rights are being violated due to an act of discrimination based on race, color, sex, national origin, religion, age, marital status, political affiliation or belief, citizenship or disability, you may file a discrimination complaint with CareerSource Citrus Levy Marion’s Equal Opportunity Officer (contact information listed below) or directly to the following agencies: Department of Economic Opportunity (DEO), Office for Civil Rights, 107 East Madison Street, MSC 150,Tallahassee, FL 32399; US Department of Labor Civil Rights Center, 200 Constitution Ave NW, Room N-4123, Washington DC 20210, within 180 days of the alleged occurrence; Equal Employment Opportunity Commission, Miami District Office, One Biscayne Tower Suite 2700, 2 South Biscayne Blvd, Miami FL 33131 within 300 days of alleged offense; FL Commission on Human Relations, 4075 Esplanade Way Room 110, Tallahassee FL 32399 within 365 days of alleged offense.</p>
            <h4>GRIEVANCE/COMPLAINT PROCEDURES</h4>
            <p>If you feel you have been adversely affected by a decision or action made by CareerSource Citrus Levy Marion personnel and have discussed the matter with the Center Manager or Kathleen Woodring, Chief Operating Officer, CareerSource Citrus Levy Marion, at (352) 873-7939, ext. 1202, you have the right to file a written grievance/complaint to CareerSource Citrus Levy Marion’s Equal Opportunity Officer (contact information listed below) or directly to the DEO (see contact information above). Information on filing a grievance/complaint can be obtained from the CareerSource Citrus Levy Marion’s Equal Opportunity Officer. After the opportunity for a hearing with the local office (within 60 days after formal filing), if you are dissatisfied, you may appeal to the Department of Economic Opportunity, Office for Civil Rights, 107 East Madison Street, MSC 150,Tallahassee, FL 32399. Local EOO: Iris Pozo, 3003 SW College Road Ste. 205, Ocala, FL 34474, (352) 873-7939, ext. 1286 ipozo@careersourceclm.com</p>
            <p>I certify that I have received a copy of this form and a copy of DEO OCR notice “Equal Opportunity is the Law”; and that I have read and understand my rights and responsibilities as enumerated in both. I also understand that both this form and the DEO notice will be made a part of my customer file maintained by CareerSource Citrus Levy Marion.</p>
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
