<?php ob_start() ?>
<body>
	<link rel="stylesheet" href="/img/theme/logo.png" />
	<div class="header">
		<div class="left">
			<img src="/img/admin_header_logo.png" class="logo" />
		</div>
		

		<div class="right">
			<ul class="list">
				<li></li>
			</ul>
		</div>
	</div>

	<br clear="all" />

	<h3>
		<?= $company_name ?> Acknowledgement of Electronic Signature
	</h3>

	<p class="copy">
		I, the undersigned, acknowledge and agree the use of the <?= $company_name ?>
        Electronic Signature when completing required online forms, agreements and acknowledgements for the <?= $company_abbr ?>
        program(s) for which I am obtaining or seeking to obtain services. The information provided may be
        used to determine eligibility and suitability for services, to meet program participation requirements
        and post employment, follow up services.
	</p>

	<table class="form">
		<tr class="input-row">
			<td class="field-left">
				<b><?= $user['User']['firstname'] . ' ' . $user['User']['lastname'] ?></b>
			</td>

			<td class="field-center" style="width:25%">
				<b>
					<?php
						if($user['User']['dob'] != NULL){
							echo date("m/d/Y", strtotime($user['User']['dob']));
						}
					?>
				</b>
			</td>

			<td class="field-right" style="width:20%">
				<b>
					<?= date('m/d/Y') ?>
				</b>
			</td>
		</tr>

		<tr class="label-row">
			<td class="label-left">
				<p>
					Participant Name(Please print legibly)
				</p>
			</td>

			<td class="label-center">
				<p>
					Date of Birth
				</p>
			</td>

			<td class="label-right">
				<p>
					Date
				</p>
			</td>
		</tr>
	</table>

	<table class="form">
		<tr class="input-row">
			<td class="field-left">
				<img class="sig" src="/signatures/<?= $user['User']['id'] ?>/signature.png" />
			</td>

			<td class="field-center">
				<b><?= $user['User']['email'] ?></b>
			</td>
		</tr>

		<tr class="label-row">
			<td class="label-left">
				<p>
					Participant Signature
				</p>
			</td>

			<td class="label-center">
				<p>
					Email Address
				</p>
			</td>
		</tr>
	</table>

	<?php if(strtotime($user['User']['dob']) > strtotime("-18 years")): ?>
	<p>
		If under 18 years of age, it is required to have a parent or legal guardian sign:
	</p>

	<table class="form">
		<tr class="input-row">
			<td class="field-left" style="height:20px">
				<b>
					<?= ($user['User']['guardian'] != NULL ? $user['User']['guardian'] : "") ?>
				</b>
			</td>

			<td class="field-center">
				<?php if($user['User']['guardian'] != NULL): ?>
					<img class="sig" src="/signatures/<?= $user['User']['id'] ?>/guardian.png" />
				<?php endif ?>
			</td>
		</tr>

		<tr class="label-row">
			<td class="label-left">
				<p>
					Parent/Guadian (Please print legibly)
				</p>
			</td>

			<td class="label-center">
				<p>
					Parent/Guardian Signature
				</p>
			</td>
		</tr>
	</table>

<?php endif ?>

	<p class="equal-divider">
		=============================================================
	</p>

	<h3>
		<?= $company_name ?> General Release of Information
	</h3>

	<p class="copy">
		I hereby give my permission for <?= $company_name ?> Staff to obtain and/or disclose my past, present, and future
        information or records that may be needed for eligibility determination, monitoring and follow-up purposes.
        This information may include, but shall not be limited to: school records, grade records, attendance records,
        employment information, medical records, public assistance records, employment information and vocational
        rehabilitation assessment or evaluation tools. A photocopy/facsimile of this signed consent form may be used
        to obtain/release information authorized by signature on this form.
	</p>
	<p class="copy">

		It is also my understanding that any information obtained by the above organization will be held 
		in strict confidence.
	</p>
	<p class="copy">
		I understand that I may revoke this consent at any time by providing a written statement indicating 
		that my consent to the release of information is no longer given to the party(ies) previously granted permission.
	</p>

	<table class="form">
		<tr class="input-row">
			<td class="field-left">
				<b>
					<?= $user['User']['firstname'] . ' ' . $user['User']['lastname'] ?>
				</b>
			</td>

			<td class="field-center" style="width:20%">
				<b>
					<?= date('m/d/Y') ?>
				</b>
			</td>
		</tr>

		<tr class="label-row">
			<td class="label-left">
				<p>
					Participant Name (Please print legibly)
				</p>
			</td>

			<td class="label-center">
				<p>
					Date
				</p>
			</td>
		</tr>
	</table>

	<table class="form">
		<tr class="input-row">
			<td class="field-left">
				<img class="sig" src="/signatures/<?= $user['User']['id'] ?>/signature.png" />
			</td>

			<td class="field-center">
				<b><?= $user['User']['phone'] ?></b>
			</td>
		</tr>

		<tr class="label-row">
			<td class="label-left">
				<p>
					Participant Signature
				</p>
			</td>

			<td class="label-center">
				<p>
					Phone Number
				</p>
			</td>
		</tr>
	</table>

	<?php if(strtotime($user['User']['dob']) > strtotime("-18 years")): ?>
	<p>
		If under 18 years of age, it is required to have a parent or legal guardian sign:
	</p>

	<table class="form">
		<tr class="input-row">
			<td class="field-left" style="height:20px">
				<b>
					<?= ($user['User']['guardian'] == NULL ? "" : $user['User']['guardian']) ?>
				</b>
			</td>

			<td class="field-center">
				<b>
					<?php if($user['User']['guardian'] != NULL): ?>
						<img class="sig" src="/signatures/<?= $user['User']['id'] ?>/guardian.png" />
					<?php endif ?>
				</b>
			</td>
		</tr>

		<tr class="label-row">
			<td class="label-left">
				<p>
					Parent/Guadian (Please print legibly)
				</p>
			</td>

			<td class="label-center">
				<p>
					Parent/Guardian Signature
				</p>
			</td>
		</tr>
	</table>

<?php endif ?>

	<p class="disclaimer">
		<?= $company_name ?> is an equal opportunity employer/program. 
		Auxiliary aids and services are available upon request to individuals with disabilities. 
		All voice telephone numbers listed may be reached by persons using TTY/TDD equipment via the
	</p>
</body>
<?php return ob_get_clean() ?>

<!--updated-->