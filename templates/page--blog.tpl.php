<?php
include("includes/header.php");
?>

<div id="content-container">

	<div class="page-content">
	
	<div class="contentheader">
			<?php print render($page['content_header']); ?>
    		<div class="hr"></div>
        </div>
		
	<div class="blog-post">
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
      <?php print $feed_icons; ?>

    </div>
        
<!--	<div class="sidebar">
		<?php print render($page['sidebar_blog']); ?>
	</div>-->
    
    <!-- Clear blog-post and sidebar-left to fix layout -->
    <div class="clrfix"></div>
    
    </div>
    
 
<?php
include("includes/sidebar.php");
include("includes/footer.php");
?>
