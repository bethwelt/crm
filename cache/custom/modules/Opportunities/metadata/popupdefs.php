<?php
$popupMeta = array (
    'moduleMain' => 'Opportunity',
    'varName' => 'OPPORTUNITY',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'opportunities.name',
  'account_name' => 'accounts.name',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'account_name',
),
    'searchdefs' => array (
  0 => 'name',
  1 => 
  array (
    'name' => 'account_name',
    'displayParams' => 
    array (
      'hideButtons' => 'true',
      'size' => 30,
      'class' => 'sqsEnabled sqsNoAutofill',
    ),
  ),
  2 => 'opportunity_type',
  3 => 'sales_stage',
  4 => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'OPPORTUNITY_TYPE' => 
  array (
    'width' => '15%',
    'default' => true,
    'label' => 'LBL_TYPE',
    'name' => 'opportunity_type',
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'amount',
  ),
  'CLIENTNAME_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CLIENTNAME',
    'id' => 'ACCOUNT_ID2_C',
    'link' => true,
    'width' => '10%',
    'name' => 'clientname_c',
  ),
  'LEAD_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_LEAD',
    'id' => 'LEAD_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'lead_c',
  ),
  'SALESPERSON_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SALESPERSON',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'salesperson_c',
  ),
  'AMOUNT_USDOLLAR' => 
  array (
    'type' => 'currency',
    'studio' => 
    array (
      'editview' => false,
      'detailview' => false,
      'quickcreate' => false,
    ),
    'label' => 'LBL_AMOUNT_USDOLLAR',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'amount_usdollar',
  ),
  'CLIENT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CLIENT',
    'width' => '10%',
    'name' => 'client_c',
  ),
),
);
