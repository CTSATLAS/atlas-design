<?php 
if ($this->params['action'] == 'display' && $this->params['controller'] == "pages"):
 ?>
<ul id="social-tabs" class="tabs">
			        <li>
			          <input class="radio-tab" type="radio" checked name="tabs" id="tab1">
			          <label for="tab1">Facebook</label>
			          <div id="tab-content1" class="tab-content animated fadeIn">
			            <div class="fb-page" data-href="https://www.facebook.com/careersourceokaloosawalton" data-tabs="timeline" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/careersourceokaloosawalton"><a href="https://www.facebook.com/careersourceokaloosawalton">Careersource Okaloosa Walton</a></blockquote></div></div>
			          </div>
			        </li>
			        <li>
			          <input class="radio-tab" type="radio" name="tabs" id="tab2">
			          <label for="tab2">Twitter</label>
			          <div id="tab-content2" class="tab-content animated fadeIn">
			           <a class="twitter-timeline" href="https://twitter.com/careersourceow" data-widget-id="638411923520909312">Tweets by @careersourceow</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			          </div>
			        </li>
			    </ul>

<?php endif ; ?>