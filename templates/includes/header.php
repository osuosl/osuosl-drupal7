<div id="header">
<div id="header-container">
	<div id="osu-tag">
    	<a href="http://oregonstate.edu"><img src="/<?php print $directory;?>/images/osu-tag.png" alt="OSU Tag" border="0" /></a>
    </div>
    
    <div id="osl-logo">
    	<a href="http://osuosl.org"><img src="/<?php print $directory;?>/images/logo.png" alt="OSL Open Source Lab Logo" border="0" /></a>    
    </div>
    
  <div id="navigation">
    	<?php if ($main_menu): ?>
        	<?php print theme('links__system_main_menu', array(
          	'links' => $main_menu,
          	'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
        )); ?>
    	<?php endif; ?>
    </div>
    
    <div id="searchbar">
    	<?php print render($page['search']); ?>
    </div>
    
    <div class="clrfix"></div>
    
<!-- End Header and Header Container Below -->
</div>
</div>

<div id="gray-line">
	&nbsp;
</div>