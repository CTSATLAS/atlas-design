<div class="notices">
    <?php echo $this->Session->flash() ?>
</div>


<div class="container">

<div class="span6 mos-map">
 
  	<?php $add = urlencode($location['ModsMobileStop']['location_address']) ?>

	   
    <p class="map">
	  
      <img src="//maps.google.com/maps/api/staticmap?center=<?php echo $add ?>&amp;zoom=15&amp;size=800x320&amp;sensor=false&amp;markers=color:blue%7C<?php echo $add; ?>&maptype=roadmap">

    </p>
	

</div>		
	
<div class="span5">
<h3>
<?php echo $location['ModsMobileStop']['location_address'] ?>
</h3>
  <p>
		 <?php echo $location['ModsMobileStop']['visit_purpose'] ?>
	</p>
	
</div>	

</div>

