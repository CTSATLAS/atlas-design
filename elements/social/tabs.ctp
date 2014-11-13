
<div id="tab-container" class="tab-container">
    <ul class='etabs'>
        <li class='tab'><a href="#twitter">Twitter</a></li>
        <li class='tab'><a href="#facebook">Facebook</a></li>
        <!--  <li class='tab'><a href="#tabs1-css">Youtube</a></li> -->
    </ul>
    <div id="twitter">
        <?php echo $this->element('social/twitter', array('twitter_url' => 'https://twitter.com/cspinellas', 'widget_id' => '443408080022155264')); ?>
    </div>
    <div id="facebook">
        <!-- content -->
        <?php echo $this->element('social/facebook', array('fb_url' => 'http://www.facebook.com/CareerSourceChipola')); ?>
    </div>
    <div id="tabs1-css">
        <!-- content -->
        <?php // echo $this->element('social/youtube');  ?>
    </div>
</div>