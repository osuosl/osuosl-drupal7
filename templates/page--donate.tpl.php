<?php
include("includes/header.php");
?>

<div id="content-container">

	<div class="page-content">
	
	<div class="contentheader">
			<?php print render($page['content_header']); ?>
    		<div class="hr"></div>
        </div>
        
      <a id="main-content"></a>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>

    </div>
    
    <div class="right-block-container">
    	<a href="http://osuosl.org/donate">
    	<div class="donate-block">
    		<img src="/<?php print $directory;?>/images/donatetext.png" alt="Donate to the OSU Open Source Lab" border="0" />
    	</div>
    	</a>
    	
    	<div class="contact-block">
			<?php print render($page['contact_block']); ?>
		</div>
		
    	<div class="about-block">
    		<?php print render($page['about_block']); ?>
    	</div>

    </div>
    
    <!--end #content-container below -->
	</div>

 
<?php
include("includes/footer.php");
?>