<h3>Verification</h3>
<?php //echo strtotime("now") . " \n " ; echo strtotime("+1 day") ?>
<p class="text-primary">Please enter your upload verification code. </p>
<p class="text-primary">Get verification code here. </p>
<form role="form" action="verified" method="post">
    <div class="form-group">
        <label for="">Enter verification code</label>
        <input class="form-control" type="text" placeholder="Verification code"></div>
    <button class="btn btn-primary btn-large">Submit</button>
</form>