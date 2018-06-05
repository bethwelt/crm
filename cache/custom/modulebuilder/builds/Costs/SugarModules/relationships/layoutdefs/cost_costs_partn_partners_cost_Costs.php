<?php
 // created: 2018-05-22 14:49:54
$layout_defs["cost_Costs"]["subpanel_setup"]['cost_costs_partn_partners'] = array (
  'order' => 100,
  'module' => 'partn_Partners',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COST_COSTS_PARTN_PARTNERS_FROM_PARTN_PARTNERS_TITLE',
  'get_subpanel_data' => 'cost_costs_partn_partners',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
