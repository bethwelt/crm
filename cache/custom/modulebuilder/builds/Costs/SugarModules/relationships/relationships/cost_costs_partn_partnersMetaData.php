<?php
// created: 2018-05-22 14:49:54
$dictionary["cost_costs_partn_partners"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cost_costs_partn_partners' => 
    array (
      'lhs_module' => 'cost_Costs',
      'lhs_table' => 'cost_costs',
      'lhs_key' => 'id',
      'rhs_module' => 'partn_Partners',
      'rhs_table' => 'partn_partners',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cost_costs_partn_partners_c',
      'join_key_lhs' => 'cost_costs_partn_partnerscost_costs_ida',
      'join_key_rhs' => 'cost_costs_partn_partnerspartn_partners_idb',
    ),
  ),
  'table' => 'cost_costs_partn_partners_c',
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
      'name' => 'cost_costs_partn_partnerscost_costs_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cost_costs_partn_partnerspartn_partners_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cost_costs_partn_partnersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cost_costs_partn_partners_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cost_costs_partn_partnerscost_costs_ida',
        1 => 'cost_costs_partn_partnerspartn_partners_idb',
      ),
    ),
  ),
);