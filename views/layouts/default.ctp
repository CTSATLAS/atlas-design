<?php
/** 
 * @author Brandon Cordell
 * @copyright Complete Technology Solutions 2011
 * @link http://ctsfla.com
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!-- meta -->
        <?php echo $this->Html->charset(); ?>
        <meta name="description" content="" />
        <meta name="KEYWORDS" content="" />
        <meta name="Copyright" content="" />
        <meta name="Language" content="English" />

        <!-- css -->
        <?php
		    echo $this->Html->css('ui-darkness/jquery-ui-1.8.5.custom');
			echo $this->Html->css('style');
			echo $this->Html->css('superfish');
            echo $this->Html->css('font-awesome.min');
        ?>

        <!--[if IE 7]>
            <?= $this->Html->css('font-awesome-ie7.min') ?>
        <![endif]-->

        <?php
			echo $this->Html->script('jquery');
			echo $this->Html->script('jquery-ui-1.8.5.custom.min');
			echo $this->Html->script('superfish/hoverIntent.js');
			echo $this->Html->script('superfish/superfish.js');
			echo $this->Html->script('dd_roundies');
			echo $scripts_for_layout;
		?>

        <!--[if lte IE 7]>
            <link rel="stylesheet" type="text/css" href="/css/ie.css" />
        <![endif]-->
        
        <!--[if IE 8]>
            <?php echo $this->Html->scriptBlock(
            	"DD_roundies.addRule('#maincontent', 8, true);"
            ) ?>
		<![endif]-->
		
        <!-- js -->   
        <?php echo $this->Html->scriptBlock(
			"$(document).ready(function(){
				$('.message').fadeOut(10000);
				if($('.actions ul').text() == '') {
				    $('div.actions').hide();
				}
				
				$('#search_field').focus(function() {
                    if ($(this).val() == 'KEYWORD SEARCH') {   
                        $(this).val('');
                    }
                    $(this).removeClass('field_blur').addClass('field_focus');
                }).blur(function() {
                   if ($(this).val() == '') {
                       $(this).val('KEYWORD SEARCH');
                   }
                   $(this).removeClass('field_focus').addClass('field_blur');
                });
		    });"
	    )?>

        <!-- favicon -->
		<?php echo $this->Html->meta('icon'); ?>

        <!-- title -->
		<title>
		    <?php __('Tampa Bay Workforce Alliance'); ?>
		    <?php echo $title_for_layout; ?>
		</title>
    </head>
    <body>
        <div class="container">
            <div class="social-icons">
              <a href="http://facebook.com/TampaBayWorkforceAlliance"><img src="/img/default/facebook.png" alt="Facebook Icon" title="Like TBWA On Facebook" /></a>
              <a href="http://twitter.com/#!/TBWorkAlliance"><img src="/img/default/twitter.png" alt="Twitter Icon" title="Follow TBWA On Twitter" /></a>
              <a href="http://linkedin.com/company/tampa-bay-workforce-alliance"><img src="/img/default/linkedin.png" alt="LinkedIn Icon" title="Visit TBWA On LinkedIn" /></a>
              <a href="http://youtube.com/user/tbwavideos"><img src="/img/default/youtube.png" alt="YouTube Icon" title="Watch TBWA Videos on YouTube" /></a>
            </div>
            <div class="header">
                <h1><a href="/">Tampa Bay Workforce Alliance</a></h1>
                <form action="#" method="post">
                    <p>
                        <label for="search_field">Search</label>
                        <input type="text" class="field_blur" id="search_field" name="search_field" value="KEYWORD SEARCH" />
                    </p>
                    <p><input type="submit" id="search_submit" value="Go" /></p>
                </form>
	            <?php if (!$session->read('Config.language')): ?>
		    		<a class="translate-button" href="/kiosk/kiosks/set_language/es">Español</a>
		    	<?php else: ?>
		    		<a class="translate-button" href="/kiosk/kiosks/set_language/en">English</a>
		    	<?php endif ?>
            </div> <!-- end .header -->
            <div class="clear"></div>
            
            <div class="content">
                <div class="topNav">
                	<?php echo $this->Nav->links('Top', true) ?>
                </div> <!-- end .topNav -->
                <div class="clear"></div>
                
                <div id="aside">
	                <div class="leftNav">
	                	<?php echo $this->Nav->links('Left', true) ?>
	                </div> <!-- end .leftNav -->
	                
	                <div class="feedback">
	                    <h3><?php __('Tell Us What You Think') ?></h3>
	                    <p><?php __('Overall, in terms of resources and information, how effective is this website in meeting your employment
	                    needs?') ?></p>
	                    <form action="#" method="post">
	                        <p>
	                            <input type="radio" value="Very Effective" name="very_effective" />
	                            <label for="very_effective"><?php __('Very Effective') ?></label>
	                        </p>
	                        <p>
	                            <input type="radio" value="Somewhat Effective" name="somewhat_effective" />
	                            <label for="somewhat_effective"><?php __('Somewhat Effective') ?></label>
	                        </p>
	                        <p>
	                            <input type="radio" value="not_very_effective" name="not_very_effective" />
	                            <label for="very_effetive"><?php __('Not Very Effective') ?></label>
	                        </p>
	                        <p><input type="submit" id="feedback_submit" value="<?php __('Select') ?>" /></p>
	                    </form>
	                </div> <!-- end .feedback -->
	            </div> <!-- end #aside -->
	            
	            <?php if ($this->params['action'] == 'display' && $this->params['controller'] == 'pages'): ?>
	            <div id="maincontent" class="homebg">
	                <div>
	            	<?php else: ?>
	            <div id="maincontent">
	                <div class="sub_content">
		            <?php endif; ?>
		                <?php $controller = Inflector::camelize($this->params['controller']) ?>
		                <?php if (Configure::read("{$controller}.title")) {
		                    $title = Configure::read("{$controller}.title");
		                } else {
		                    $title = $title_for_layout;
		                } ?>
		                <?php if (Configure::read("{$controller}.description")) {
		                    echo Configure::read("{$controller}.description");
		                } ?>
		            	<?php echo $this->Session->flash(); ?>
						<?php echo $session->flash('auth'); ?>
		            	<?php echo $content_for_layout; ?>
	                </div>
                </div> <!-- end #maincontent -->
            </div> <!-- end .content -->

            <div class="footer">
                <div class="left last">
                    <h4>OneStop Locations</h4>
                    <ul>
                        <li><a href="/locations#WorkForce_Brandon_Career_Center">Workforce Brandon</a></li>
                        <li><a href="/locations#WorkForce_Plant_City_Career_Center">Workforce Plant City</a></li>
                        <li><a href="/locations#WorkForce_Tampa_Career_Center">Workforce Tampa</a></li>
                    </ul>
                </div> <!-- end .last -->
            </div> <!-- end .footer -->
        </div> <!-- end .container -->
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-24254812-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </body>
</html>
