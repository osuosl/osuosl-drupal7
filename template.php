<?php
function osuosl_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    
    // Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
    // Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['search_block_form']['#attributes']['placeholder'] = t('Search');
    $form['search_block_form']['#attributes']['src'] = t('./images/toolbar_find.png'); 
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

?>
