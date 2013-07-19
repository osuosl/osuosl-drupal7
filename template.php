<?php
function osuosl_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    
    // Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
    // Prevent user from searching the default text
    $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Search'){ alert('Please enter a search'); return false; }";

    // Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['search_block_form']['#attributes']['placeholder'] = t('Search');
  }
}

function _phptemplate_variables($hook, $vars = array())
    {
        switch ($hook)
        {
            case 'node':
            
                if(drupal_is_front_page())
                {
                    $vars['template_files'][] = 'node--front';
                }
            
            break;
        }
    }
    
function osuosl_preprocess_image(&$variables) {
  $attributes = &$variables['attributes'];

  foreach (array('width', 'height') as $key) {
    unset($attributes[$key]);
    unset($variables[$key]);
  }
}

// JQuery Fix from http://oldwildissue.wordpress.com/2012/11/19/drupal-7-manually-update-jquery-version/. thank you
function osuosl_js_alter(&$javascript) {
  //We define the path of our new jquery core file
  //assuming we are using the minified version 1.8.3
  $jquery_path = 'http://code.jquery.com/jquery-1.9.0.js';

  //We duplicate the important information from the Drupal one
  $javascript[$jquery_path] = $javascript['misc/jquery.js'];
  //..and we update the information that we care about
  $javascript[$jquery_path]['version'] = '1.9.0';
  $javascript[$jquery_path]['data'] = $jquery_path;

  //Then we remove the Drupal core version
  unset($javascript['misc/jquery.js']);
}
?>