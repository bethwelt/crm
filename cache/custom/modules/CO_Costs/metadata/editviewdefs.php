<?php
$module_name = 'CO_Costs';
$_object_name = 'co_costs';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_SALE_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_sale_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'opportunity_c',
            'studio' => 'visible',
            'label' => 'LBL_OPPORTUNITY',
          ),
          1 => 'currency_id',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'client_c',
            'studio' => 'visible',
            'label' => 'LBL_CLIENT',
          ),
          1 => 'amount',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'partnername_c',
            'studio' => 'visible',
            'label' => 'LBL_PARTNERNAME',
          ),
          1 => 
          array (
            'name' => 'partneramount_c',
            'label' => 'LBL_PARTNERAMOUNT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'country_c',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'deliversupplier_c',
            'studio' => 'visible',
            'label' => 'LBL_DELIVERSUPPLIER',
          ),
          1 => 
          array (
            'name' => 'amount_usdollar',
            'comment' => 'Formatted amount of the sale',
            'label' => 'LBL_AMOUNT_USDOLLAR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'freightsupplier_c',
            'studio' => 'visible',
            'label' => 'LBL_FREIGHTSUPPLIER',
          ),
          1 => 
          array (
            'name' => 'freightamount_c',
            'label' => 'LBL_FREIGHTAMOUNT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'financialsupplier_c',
            'studio' => 'visible',
            'label' => 'LBL_FINANCIALSUPPLIER',
          ),
          1 => 
          array (
            'name' => 'financialcost_c',
            'label' => 'LBL_FINANCIALCOST',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'transitcost_c',
            'label' => 'LBL_TRANSITCOST',
          ),
          1 => 
          array (
            'name' => 'customcost_c',
            'studio' => 'visible',
            'label' => 'LBL_CUSTOMCOST',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'forwardingagent_c',
            'studio' => 'visible',
            'label' => 'LBL_FORWARDINGAGENT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>