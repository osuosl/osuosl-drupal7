<?php
include("includes/header.php");
?>

<div id="content-container">
	<div class="page-content">
	
	<!--div class="contentheader">
			<h1 class="small">Welcome to the Oregon State University Open Source Lab. <a href="/about">About Us</a></h1>
    		<div class="hr"></div>
    </div>-->
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
      
      	<?php print render($page['homepage_image']); ?>
	
	<div class="blog-post">
      <?php print render($page['homepage_message']); ?>
      <div class="hr"></div>
      <a href="/blog"><span class="byline">OSU Open Source Lab Blog</span></a>
	  <?php print render($page['content']); ?>

    </div>
      



   
    <!-- Clear blog-post and sidebar-left to fix layout -->
    <div class="clrfix"></div>
		
      
      	
    	</div>
    
    <div class="right-block-container">
	<div class="donate-block">
		<a href="/donate">
		<img src="/<?php print $directory;?>/images/donatetext.png" alt="Donate to the OSU Open Source Lab" border="0" />
		</a></div>
    	
-    	<div class="contact-block">
			<?php print render($page['contact_block']); ?>
		</div>
		
    	<div class="about-block">
    		<?php print render($page['about_block']); ?>
    	</div>
	
	<div class="sidebar">
		<?php print render($page['sidebar_blog']); ?>
	</div>		
  
    </div>
    
    <div class="clrfix"></div>
    <!--end #content-container below -->
	</div>

 
<?php
include("includes/footer.php");
?>
