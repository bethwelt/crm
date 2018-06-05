<?php
$module_name = 'CO_Costs';
$_object_name = 'co_costs';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'opportunity_c',
            'studio' => 'visible',
            'label' => 'LBL_OPPORTUNITY',
          ),
          1 => 'amount',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'partnername_c',
            'studio' => 'visible',
            'label' => 'LBL_PARTNERNAME',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'co_costs_type',
          1 => 
          array (
            'name' => 'transitcost_c',
            'label' => 'LBL_TRANSITCOST',
          ),
        ),
        3 => 
        array (
          0 => 'lead_source',
          1 => 'date_entered',
        ),
        4 => 
        array (
          0 => 'name',
        ),
        5 => 
        array (
          0 => 'assigned_user_name',
          1 => 'date_modified',
        ),
        6 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
