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
      <?php print $feed_icons; ?>
      
    </div>
    
 
<?php
include("includes/sidebar.php");
include("includes/footer.php");
?>
