<?php
use CRM_Aws_ExtensionUtil as E;

/**
 * Sns.Get API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see https://docs.civicrm.org/dev/en/latest/framework/api-architecture/
 */
function _civicrm_api3_sns_Get_spec(&$spec) {
  $spec = array_merge($spec, CRM_Aws_Sns_BAO_Sns::getFields('get'));
}

/**
 * Sns.Get API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_sns_Get($params) {
  return civicrm_api3_create_success(
    CRM_Aws_Sns_BAO_Sns::get($params),
    $params,
    'Sns',
    'get'
  );
}
