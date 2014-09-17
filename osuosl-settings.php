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
    $form['theme_settings']['org_name'] = array(
            '#type' => 'textarea',
            '#title' => t('org_name'),
            '#default_value' => theme_get_setting('org_name')
            'required' => TRUE,
            );
    $form['#submit'][] = 'osuosl_form_systme_theme_settings_alter';
}
?>
