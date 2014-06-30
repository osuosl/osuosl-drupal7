<div class="right-block-container">
        <a href="<?php print render($donateurl);?>">
                <div class="donate-block">
                        <img src="/<?php print $directory;?>/images/donatetext.png" alt="<?php print render($donatepitch);?>" border="0" />
                </div>
        </a>

        <div class="contact-block">
                <?php print render($page['contact_block']); ?>
        </div>

        <div class="about-block">
                <?php print render($page['about_block']); ?>
        </div>
        <div class="sidebar">
                <?php print render($page['sidebar_blog']); ?>
        </div>
</div>

