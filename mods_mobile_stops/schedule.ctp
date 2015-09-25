<div class="notices">
    <?php echo $this->Session->flash() ?>
</div>
<p>
  The Mobile Unit is a self-contained resource room on wheels with twelve computer stations; satellite Internet and telecommunications; printing, copying, and total mobility. Feel free to peruse our schedule to discover when we will be at a location near you.
</p>
<table  class="table mos-map"> 

  <tr>
    <td>
<?php if(empty($data)): ?>
<h3>Sorry there doesn't appears to be no Stops at this location</h3>
<?php else :?>
<?php foreach($data as $location):  ?>

<div style="clear: all" style="margin-left: 10px;">
<aside style="min-height: 120px">
  <p>
  <a href="/mods_mobile_stops/view_schedule/<?php echo $location['ModsMobileStop']['id'] ?>">
    <?php $add = urlencode($location['ModsMobileStop']['location_address']) ?>
      <img style="" src="//maps.google.com/maps/api/staticmap?center=<?php echo $add ?>&amp;zoom=15&amp;size=120x120&amp;sensor=false&amp;markers=color:blue%7C<?php echo $add; ?>&maptype=roadmap">

      </a>

      <h3>
      <span>
           <?php echo $location['ModsMobileStop']['visit_date'] ?> @
      </span>


     <?php echo $location['ModsMobileStop']['organization'] ?> <br />
      <?php echo $location['ModsMobileStop']['location_address'] ?>


     </h3>
     <p class="lead-">
       <?php //echo $location['ModsMobileStop']['location_address'] ?>       
     </p>

    
     <p class="pull-right-">
       <a href="/mods_mobile_stops/view_schedule/<?php echo $location['ModsMobileStop']['id'] ?>">
      <button class="btn btn-info">
        More Info
      </button>

    </a>
     </p>
</aside>
 <hr />
</div>

<?php endforeach ; ?>
<?php endif ; ?>
    </td>
    <td>
    <div class="sidebar mos-map ">
  <h4>Locations</h4>
  <ul>
    <li>
    <a href="/mods_mobile_stops/schedule/">@All Locations</a>
    </li>
    <li>
    <a href="/mods_mobile_stops/schedule/location/spring_hill">@Spring Hill</a>
    </li>

    <li>
    <a href="/mods_mobile_stops/schedule/location/new_port_richey">@New Port Richey</a>
    </li>
    <li>
    <a href="/mods_mobile_stops/schedule/location/brooksville">@Brooksville</a>
    </li>
    <li>
    <a href="/mods_mobile_stops/schedule/location/zephyrhills">@Dade City</a>
    </li>
  </ul>
</div>
    </td> 

  </tr>
 
</table>
