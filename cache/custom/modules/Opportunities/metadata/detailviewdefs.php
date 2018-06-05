<?php
$viewdefs ['Opportunities'] = 
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'DEFAULT' => 
        array (
          'newTab' => true,
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
          0 => 'name',
          1 => 
          array (
            'name' => 'currency_id',
            'comment' => 'Currency used for display purposes',
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
          1 => 'date_closed',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
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
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
          1 => 
          array (
            'name' => 'partnercost_c',
            'studio' => 'visible',
            'label' => 'LBL_PARTNERCOST',
          ),
        ),
      ),
      'default' => 
      array (
        0 => 
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
        1 => 
        array (
          0 => 'next_step',
          1 => 'lead_source',
        ),
        2 => 
        array (
          0 => 'sales_stage',
          1 => 
          array (
            'name' => 'salesperson_c',
            'studio' => 'visible',
            'label' => 'LBL_SALESPERSON',
          ),
        ),
        3 => 
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
        4 => 
        array (
          0 => 'probability',
          1 => 
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
