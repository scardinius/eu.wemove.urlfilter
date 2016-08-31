<?php

require_once 'urlfilter.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function urlfilter_civicrm_config(&$config) {
  _urlfilter_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function urlfilter_civicrm_xmlMenu(&$files) {
  _urlfilter_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function urlfilter_civicrm_install() {
  _urlfilter_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function urlfilter_civicrm_uninstall() {
  _urlfilter_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function urlfilter_civicrm_enable() {
  _urlfilter_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function urlfilter_civicrm_disable() {
  _urlfilter_civix_civicrm_disable();
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
function urlfilter_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _urlfilter_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function urlfilter_civicrm_managed(&$entities) {
  _urlfilter_civix_civicrm_managed($entities);
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
function urlfilter_civicrm_caseTypes(&$caseTypes) {
  _urlfilter_civix_civicrm_caseTypes($caseTypes);
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
function urlfilter_civicrm_angularModules(&$angularModules) {
_urlfilter_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function urlfilter_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _urlfilter_civix_civicrm_alterSettingsFolders($metaDataFolders);
}


function urlfilter_civicrm_urlFilter($url, $mailing_id, $queue_id, &$filter) {
  /* exclude all non wemove.eu urls */
  if (strpos($url, 'wemove.eu') !== FALSE) {
    $filter = true;
  }
}


function urlfilter_civicrm_pre($op, $objectName, $id, &$params) {
  if ($objectName == 'TrackableURL' and $op == 'create') {
    // todo alter url if it doesn't have utm_params
    // todo $params['url'] and $params['mailing_id']
    // todo where are utm params stored? Mailing entity doesn't have allowed to using custom fields
  }
}
