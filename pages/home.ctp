<?php
/** 
* @author Brandon Cordell
* @copyright Complete Technology Solutions 2011
* @link http://ctsfla.com
*/
?>


<div class="row-fluid">
  
        <div class="span12 home-content">

            <?php echo $this->element('homepage') ?>
        </div>
    </div>

 <?php 
//        // Create curl resource
//$ch = curl_init();
//// Set url
//curl_setopt($ch, CURLOPT_URL, "http://twitter.com/statuses/user_timeline/shawnsandy.json?count=10");
//// Return the transfer as a string
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//// $output contains the output string
//$output = curl_exec($ch);
//// Close curl resource to free up system resources
//curl_close($ch);
//
//if ($output)
//{
//    $tweets = json_decode($output,true);
//    var_dump($tweets);
//    foreach ($tweets as $tweet)
//    {
//       var_dump($tweet);
//    }
//}
 ?>
