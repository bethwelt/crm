<?php
$viewdefs ['Opportunities'] = 
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
          'field' => '15',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '15',
        ),
      ),
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
          ),
          1 => 
          array (
            'name' => 'currency_id',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'country_c',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'date_closed',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount',
          ),
          1 => 
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'partnercost_c',
            'studio' => 'visible',
            'label' => 'LBL_PARTNERCOST',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'clientname_c',
            'studio' => 'visible',
            'label' => 'LBL_CLIENTNAME',
          ),
          1 => 
          array (
            'name' => 'approachfees_c',
            'studio' => 'visible',
            'label' => 'LBL_APPROACHFEES ',
          ),
        ),
        5 => 
        array (
          0 => 'next_step',
          1 => 
          array (
            'name' => 'datenex_c',
            'label' => 'LBL_DATENEX',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'salesperson_c',
            'studio' => 'visible',
            'label' => 'LBL_SALESPERSON',
          ),
          1 => 'sales_stage',
        ),
        7 => 
        array (
          0 => 'lead_source',
          1 => 'probability',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'negamount_c',
            'label' => 'LBL_NEGAMOUNT',
          ),
          1 => 
          array (
            'name' => 'gmamount_c',
            'label' => 'LBL_GMAMOUNT',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'gmperc_c',
            'label' => 'LBL_GMPERC',
          ),
        ),
      ),
    ),
  ),
);
?>
