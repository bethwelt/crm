<?php
// created: 2018-06-06 16:26:13
$dictionary["co_costs_opportunities_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'co_costs_opportunities_1' => 
    array (
      'lhs_module' => 'CO_Costs',
      'lhs_table' => 'co_costs',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'co_costs_opportunities_1_c',
      'join_key_lhs' => 'co_costs_opportunities_1co_costs_ida',
      'join_key_rhs' => 'co_costs_opportunities_1opportunities_idb',
    ),
  ),
  'table' => 'co_costs_opportunities_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'co_costs_opportunities_1co_costs_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'co_costs_opportunities_1opportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'co_costs_opportunities_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'co_costs_opportunities_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'co_costs_opportunities_1co_costs_ida',
        1 => 'co_costs_opportunities_1opportunities_idb',
      ),
    ),
  ),
);