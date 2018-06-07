<?php
 // created: 2018-06-06 16:26:13
$layout_defs["Opportunities"]["subpanel_setup"]['co_costs_opportunities_1'] = array (
  'order' => 100,
  'module' => 'CO_Costs',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CO_COSTS_OPPORTUNITIES_1_FROM_CO_COSTS_TITLE',
  'get_subpanel_data' => 'co_costs_opportunities_1',
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
