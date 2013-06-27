<?php
use Destiny\Utils\Tpl;
use Destiny\Config;
?>	
<script src="<?=Config::cdn()?>/vendor/js/jquery-1.10.1.min.js"></script>
<script src="<?=Config::cdn()?>/vendor/js/bootstrap.js"></script>
<script src="<?=Config::cdn()?>/vendor/js/moment.js"></script>
<?php if(Config::$a['compressed']):?>
<script src="<?=Config::cdn()?>/web/js/destiny.<?=Config::version()?>.js"></script>
<?php else: ?>
<script src="<?=Config::cdn()?>/web/js/utils.js"></script>
<script src="<?=Config::cdn()?>/web/js/destiny.js"></script>
<script src="<?=Config::cdn()?>/web/js/feed.js"></script>
<script src="<?=Config::cdn()?>/web/js/profile.js"></script>
<script src="<?=Config::cdn()?>/web/js/twitch.js"></script>
<script src="<?=Config::cdn()?>/web/js/teambar.js"></script>
<script src="<?=Config::cdn()?>/web/js/teamcreator.js"></script>
<script src="<?=Config::cdn()?>/web/js/challenger.js"></script>
<script src="<?=Config::cdn()?>/web/js/ui.js"></script>
<?php endif; ?>
<script>destiny.init({cdn:'<?=Config::cdn()?>'});</script>