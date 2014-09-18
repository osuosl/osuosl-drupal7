<?php
function osuosl_form_system_theme_settings_alter(&$form, $form_state){
    $form['theme_settings']['org_logo'] = array(
            '#type' => 'managed_file',
            '#title' => t('logo'),
            '#required' => TRUE,
            '#default_value' => theme_get_setting('logo'),
            '#upload_validators' => array(
                'file_validate_extensions' => array('git png jpg jpeg')
                )
            );
    $form['theme_settings']['site_name'] = array(
            '#type' => 'textfield',
            '#title' => t('site_name'),
            '#default_value' => theme_get_setting('site_name')
            'required' => TRUE,
            );
}
?>
