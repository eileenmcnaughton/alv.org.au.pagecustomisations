<?php

require_once 'pagecustomisations.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function pagecustomisations_civicrm_config(&$config) {
  _pagecustomisations_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function pagecustomisations_civicrm_xmlMenu(&$files) {
  _pagecustomisations_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function pagecustomisations_civicrm_install() {
  _pagecustomisations_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function pagecustomisations_civicrm_uninstall() {
  _pagecustomisations_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function pagecustomisations_civicrm_enable() {
  _pagecustomisations_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function pagecustomisations_civicrm_disable() {
  _pagecustomisations_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function pagecustomisations_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _pagecustomisations_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function pagecustomisations_civicrm_managed(&$entities) {
  _pagecustomisations_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function pagecustomisations_civicrm_caseTypes(&$caseTypes) {
  _pagecustomisations_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function pagecustomisations_civicrm_angularModules(&$angularModules) {
_pagecustomisations_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function pagecustomisations_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _pagecustomisations_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_buildForm().
 *
 * Set a default value for an event price set field.
 *
 * @param string $formName
 * @param CRM_Core_Form $form
 */
function pagecustomisations_civicrm_buildForm($formName, &$form) {
  $whiteList = array(
    'CRM_Contribute_Form_Contribution_Main',
    'CRM_Contribute_Form_Contribution_ThankYou',
  );
  if (!in_array($formName, $whiteList)) {
    return;
  }
  $fileName = 'blah';
  CRM_Core_Resources::singleton()->addScript(file_get_contents($fileName));

  $defaults = array();
  foreach (_pagecustomisations_get_fields($form) as $field) {
    $urlValue = CRM_Utils_Request::retrieve($field, 'String');
    if (!is_null($urlValue)) {
      $defaults[$field] = $urlValue;
    }
  }

  $form->setDefaults($defaults);
}

/**
 * Get a list of fields on the form.
 *
 * These may need to be filtered?
 *
 * @param $form
 *
 * @return array
 */
function _pagecustomisations_get_fields($form) {
  return array_keys($form->_elementIndex );
}

/**
 * Alter amount options.
 *
 * @param $pageType
 * @param $form
 * @param $amount
 */
function pagecustomisations_civicrm_buildAmount($pageType, &$form, &$amount) {
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function pagecustomisations_civicrm_preProcess($formName, &$form) {

}

*/
