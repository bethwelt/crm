<?php
 // created: 2018-05-22 14:49:54
$layout_defs["sup_Supplires"]["subpanel_setup"]['cost_costs_sup_supplires'] = array (
  'order' => 100,
  'module' => 'cost_Costs',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COST_COSTS_SUP_SUPPLIRES_FROM_COST_COSTS_TITLE',
  'get_subpanel_data' => 'cost_costs_sup_supplires',
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
