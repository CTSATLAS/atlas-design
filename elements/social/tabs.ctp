<?php
$social_fb = 'https://www.facebook.com/'.Configure::read('Social.facebook') ;
$social_twitter = Configure::read('Social.twitter') ;
$social_twitter_id = Configure::read('Social.twitter_id') ;

echo $this->Html->css('tabs/css/tabs-style');
if ($this->params['action'] == 'display' && $this->params['controller'] == "pages"):
    ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=188470541231776";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    <ul id="social-tabs" class="tabs" style="width: 332px !important">
        <li>
            <input class="radio-tab" type="radio" checked name="tabs" id="tab1">
            <label for="tab1">Facebook</label>
            <div id="tab-content1" class="tab-content animated fadeIn">
                <div class="fb-page" data-href="<?= $social_fb ?>"
                     data-tabs="timeline" data-height="400" data-small-header="true" data-adapt-container-width="true"
                     data-hide-cover="true" data-show-facepile="false">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="<?= $social_fb ?>"><a
                                    href="<?= $social_fb ?>"> <?= Configure::read('Company.name') ?></a></blockquote>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <input class="radio-tab" type="radio" name="tabs" id="tab2">
            <label for="tab2">Twitter</label>
            <div id="tab-content2" class="tab-content animated fadeIn">
                <a class="twitter-timeline" data-height="400" href="https://twitter.com/<?= $social_twitter ?>">Tweets by <?= $social_twitter ?></a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </li>
        <li>
            <input class="radio-tab" type="radio" name="tabs" id="tab3">
            <label for="tab3">LinkedIn</label>
            <div id="tab-content3" class="tab-content animated fadeIn">
                <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                <script type="IN/JYMBII" data-companyid="716033" data-format="inline"></script>
            </div>
        </li>
    </ul>

<?php endif; ?>
