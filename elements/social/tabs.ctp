
<div id="tab-container" class="tab-container">
    <ul class='etabs'>
        <li class='tab'><a href="#twitter">Twitter</a></li>
<<<<<<< HEAD
        <li class='tab'><a href="#facebook">Facebook</a></li>
        <!--  <li class='tab'><a href="#tabs1-css">Youtube</a></li> -->
    </ul>
    <div id="twitter">
        <?php echo $this->element('social/twitter', array('twitter_url' => 'https://twitter.com/cspinellas', 'widget_id' => '443408080022155264')); ?>
    </div>
    <div id="facebook">
        <!-- content -->
        <?php echo $this->element('social/facebook', array('fb_url' => 'http://www.facebook.com/CareerSourceChipola')); ?>
=======
        <li class='tab'><a href="#tabs1-js">Facebook</a></li>
        <!--  <li class='tab'><a href="#tabs1-css">Youtube</a></li> -->
    </ul>
    <div id="twitter">
        <?php echo $this->element('social/twitter', array('twitter_url' => 'https://twitter.com/cspinellas', 'widget_id' => '531871644218691584')); ?>
    </div>
    <div id="tabs1-js">
        <!-- content -->
        <?php echo $this->element('social/facebook', array('fb_url' => 'https://www.facebook.com/CareerSourcePinellas')); ?>
>>>>>>> cb1297b56c54d69941f69b5527e1882d3ef02e6b
    </div>
    <div id="tabs1-css">
        <!-- content -->
        <?php // echo $this->element('social/youtube');  ?>
    </div>
</div>