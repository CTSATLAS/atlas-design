<link rel="stylesheet" href="/js/jqueryui_signature/jquery.signature.css" />
<script type="text/javascript" src="/js/jqueryui_signature/jquery.signature.min.js"></script>
<style>
#esign p:first-child
{
	margin:0px;
}
.tos
{
	height:150px;
	overflow-y:scroll;

	border:1px solid #CCC;
	padding:10px;
}
#sig, #guard
{
	width:100%;
	height:75px;
}
#sig
{
	margin-top:5px;
	margin-bottom:5px;
}
#sig > canvas
{
	width:100%;
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

			<div class="row" id="guardian_container" style="margin-bottom:5px;<?= (!$under_18 ? 'display:none' : '') ?>">
				<div class="span4">
					<p class="pull-right">
						Guardian Name
					</p>
				</div>
				<div class="span4">
					<input type="text" name="guardian_name" class="input-sm" style="width:60%" placeholder="Enter guardian name" />
				</div>
			</div>
			<div class="row" id="under18" style="<?= (!$under_18 ? 'display:none' : '') ?>">
				<div class="span4">
					<p class="pull-right">
						You are under 18 years of age, have a parent/guardian sign in this box:
					</p>
				</div>
				<div class="span4">
					<div id="guard"></div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4">
					<p class="error-output pull-right text-danger"></p>
				</div>
				<div class="col-sm-6">

					<div class="btn-group pull-right">
						<button name="done" id="done" class="btn btn-primary">Done Signing</button>
						<button name="reset" id="reset" class="btn btn-primary">Reset</button>
					</div>
				</div>
			</div>

		<textarea name="lines" id="lines" style="display:none"></textarea>

		<textarea name="guardian" id="guardian" style="display:none"></textarea>
	</div>
</div>


<script type="text/javascript">
$(document).ready(function(){

var sig = $("#sig");
sig.signature({syncField: '#lines'});

console.log(sig);

var guard = $("#guard");
guard.signature({syncField: '#guardian'});

var guardian_name = $("input[name=guardian_name]");
var guardian_container = $("#guardian_container");

var under18 = $("#under18");

var errorOutput = $(".error-output");

var done = $("#done");
var reset = $("#reset");

done.click(function(){

	var isEmpty = sig.signature('isEmpty');
	var guardEmpty = guard.signature('isEmpty');

	if(isEmpty)
	{
		$(this).removeClass('btn-primary');
		$(this).addClass('btn-danger');

		errorOutput.text("You must sign with your mouse before continuing");
	}
	else if(guardEmpty && under18.css('display') != 'none'){
		$(this).removeClass('btn-primary');
		$(this).addClass('btn-danger');

		errorOutput.text("An adult over the age of 18 must sign the bottom signature");
	}
	else if(guardian_container.css('display') != 'none' && guardian_name.val() == "")
	{
		console.log(guardian_container);
		$(this).removeClass('btn-primary');
		$(this).addClass('btn-danger');

		errorOutput.text("Guardian's name is required");
	}
	else
	{
		$(this).removeClass('btn-danger');
		$(this).addClass('btn-success');
		errorOutput.text("");

		$.ajax({
			url : '/programs/esign_document',
			type : 'POST',
			dataType : 'json',
			data : { 
				lines : $("#lines").val(), 
				esign_id : '<?= $this->params['pass'][0] ?>', 
				guardian: $("#guardian").val(),
				guardian_name : guardian_name.val()
			},
			success : function(response){
				if(response.success)
				{
					var image = '/' + response.output;
					$("#post-save-image").attr('src', image);

					location.pathname = '<?= (isset($_GET['redirect']) ? $_GET['redirect'] : "/users/dashboard") ?>';
				}
				else
				{
					console.log(response);
				}
			},
			error : function(response, error){
				console.log(response);
				console.log(error);
			}
		});

	}
});

reset.click(function(e){
	$("#sig").signature('clear');
	$("#lines").val('');

	guardian_name.val('');

	guard.signature('clear');

	done.removeClass('btn-danger');
	done.addClass('btn-primary');
	errorOutput.text("");
});
});
</script>