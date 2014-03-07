<?php
/** 
* @author Brandon Cordell
* @copyright Complete Technology Solutions 2011
* @link http://ctsfla.com
*/
?>
<div class="row">
    <div class="span12" id="middle-nav">
        <ul class="thumbnails">
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Employers</h3>
                    </div>
                    <div class="thumbnail-pad">
                        <?= $this->Nav->links('Employers Middle', false, 'nav sf-menu') ?>
                    </div>
                </div>
            </li>
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Career Seekers</h3>
                    </div>
                    <div class="thumbnail-pad">
                        <?= $this->Nav->links('Career Seekers Middle', false, 'nav sf-menu') ?>
                    </div>
                </div>
            </li>
            <li class="span4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Programs</h3>
                    </div>
                    <div class="thumbnail-pad">
                        <?= $this->Nav->links('Programs Middle', false, 'nav sf-menu') ?>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="row-fluid">
    <div class="span3 hide-social  hidden-phone hidden-tablet">

        <div id="tab-container" class="tab-container">
  <ul class='etabs'>
    <li class='tab'><a href="#twitter">Twitter</a></li>
    <li class='tab'><a href="#tabs1-js">Facebook</a></li>
    <li class='tab'><a href="#tabs1-css">Youtube</a></li>
  </ul>
  <div id="twitter">
    <p>
            <a class="twitter-timeline" data-dnt="true" data-widget-id="294865633122844672" href="https://twitter.com/OneStopAhead">Tweets by @OneStopAhead</a> <script>!function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");</script></p>
        <p>
            <br />
            <script>!function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = "//platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");</script>
</p>
    <!-- content -->
  </div>
  <div id="tabs1-js">
    <h2>Facebook</h2>
    <!-- content -->
  </div>
  <div id="tabs1-css">
    <h2>Youtube</h2>
    <!-- content -->
  </div>
</div>
       <!-- <div id="social-stream"></div> -->
        <!-- <p>
            <a class="twitter-timeline" data-dnt="true" data-widget-id="294865633122844672" href="https://twitter.com/OneStopAhead">Tweets by @OneStopAhead</a> <script>!function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");</script></p>
        <p>
            <br />
            <script>!function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = "//platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");</script></p>
        -->
    </div>
        <div class="span9 home-content">

            <?php echo $this->element('homepage') ?>
        </div>
    </div>

 <?php 
        // Create curl resource 
$ch = curl_init(); 
// Set url 
curl_setopt($ch, CURLOPT_URL, "http://twitter.com/statuses/user_timeline/shawnsandy.json?count=10"); 
// Return the transfer as a string 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
// $output contains the output string 
$output = curl_exec($ch); 
// Close curl resource to free up system resources 
curl_close($ch);

if ($output) 
{
    $tweets = json_decode($output,true);
    var_dump($tweets);
    foreach ($tweets as $tweet)
    {
       var_dump($tweet);
    }
}
 ?>