<div class="notices">
    <?php echo $this->Session->flash() ?>
</div>
<!-- Place this tag where you want the Live Helper Plugin to render. -->
<div id="lhc_status_container_page" ></div>
<!-- Place this tag after the Live Helper Plugin tag. -->
<script type="text/javascript">
    var LHCChatOptionsPage = {};
    LHCChatOptionsPage.opt = {};
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = '//design.atlasforworkforce.com/livechat/index.php/chat/getstatusembed';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>