<?php if($key_data == 'success') : ?>
<h3>Verification Key:</h3>
<span id="vkey" class="btn btn-danger">
    <h1><?php echo $key ?></h1> 
</span>

<p class="text-primary">1. Write down the verification code (above). </br>2. Check your phone for our text message. </br>3. Click the link in the text message and wil be take to our mobile upload page.</p>

<?php else : ?>
<h3>Mobile Upload Access:</h3>

<p class="text-primary">1. Enter you mobile phone number and select your provider. </br>2. Hit "Send me link" to receive your verification key and a text with upload link / instructions.</p>
<form role="form" action="key_save" method="post">
    <input type="hidden" name="user_id" value="<?php echo $user_id ?>" readonly="readonly" />
    <div class="form-group">
        <label for="">Please Enter Your Mobile Phone Number</label>
        <input class="form-control" type="text" placeholder="Mobile Number">
    </div>
    <div class="form-group">
        <label>Please Select Your Mobile Provider</label>
        <select class="form-control">
            <option></option>
            <option>T-Mobile</option>
            <option>Sprint</option>
            <option>MetroPCS</option>
            <option>Verizon</option>
        </select>
    </div>   
    <button type="submit" class="btn btn-primary btn-large">Send Me Link</button>
</form>
<?php endif; ?>