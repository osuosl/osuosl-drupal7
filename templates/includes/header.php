<div id="header">
<div id="header-container">
<div id="osu-tag">
<a href="http://oregonstate.edu"><img src="/<?php print $directory;?>/images/osu-tag.png" alt="OSU Tag"/></a>
</div>

<div id="osl-logo">
<a href="/"><img src="/<?php print $directory;?>/images/logo-full.png" alt="OSU Open Source Lab Logo" /></a>    
</div>

<div id="navigation">
<div class="menu-button">Menu</div>
<?php if ($main_menu){
    print render($main_menu);
}
?>
</div>

<!--<div class="clrfix"></div>-->

<!-- End Header and Header Container Below -->
</div>
</div>
