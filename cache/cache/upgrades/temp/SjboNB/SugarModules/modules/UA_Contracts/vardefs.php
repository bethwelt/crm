<?php

$dictionary['UA_Contracts'] = array(
    'table' => 'ua_contracts',
    'audited' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'status' =>
            array(
                'required' => false,
                'name' => 'status',
                'vname' => 'LBL_STATUS',
                'type' => 'enum',
                'massupdate' => 0,
                'default' => 'Active',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
                'options' => 'contract_status_list',
                'studio' => 'visible',
                'dependency' => false,
            ),
        'reference_code' =>
            array(
                'required' => false,
                'name' => 'reference_code',
                'vname' => 'LBL_REFERENCE_CODE',
                'type' => 'varchar',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
            ),
        'account_id' =>
            array(
                'required' => false,
                'name' => 'account_id',
                'vname' => 'LBL_ACCOUNT_ID',
                'type' => 'id',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => false,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 36,
                'size' => '20',
            ),
        'account_name' =>
            array(
                'required' => false,
                'source' => 'non-db',
                'name' => 'account_name',
                'vname' => 'LBL_ACCOUNT_NAME',
                'type' => 'relate',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
                'id_name' => 'account_id',
                'ext2' => 'Accounts',
                'module' => 'Accounts',
                'rname' => 'name',
                'quicksearch' => 'enabled',
                'studio' => 'visible',
            ),
        'opportunity_id' =>
            array(
                'required' => false,
                'name' => 'opportunity_id',
                'vname' => 'LBL_OPPORTUNITY_ID',
                'type' => 'id',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => false,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 36,
                'size' => '20',
            ),
        'opportunity_name' =>
            array(
                'required' => false,
                'source' => 'non-db',
                'name' => 'opportunity_name',
                'vname' => 'LBL_OPPORTUNITY_NAME',
                'type' => 'relate',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => '255',
                'size' => '20',
                'id_name' => 'opportunity_id',
                'ext2' => 'Opportunities',
                'module' => 'Opportunities',
                'rname' => 'name',
                'quicksearch' => 'enabled',
                'studio' => 'visible',
            ),
        'contract_value' =>
            array(
                'required' => false,
                'name' => 'contract_value',
                'vname' => 'LBL_CONTRACT_VALUE',
                'type' => 'currency',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 26,
                'size' => '20',
                'enable_range_search' => false,
                'precision' => 6,
            ),
        'currency_id' =>
            array(
                'required' => false,
                'name' => 'currency_id',
                'vname' => 'LBL_CURRENCY',
                'type' => 'currency_id',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 36,
                'size' => '20',
                'dbType' => 'id',
                'studio' => 'visible',
                'function' =>
                    array(
                        'name' => 'getCurrencyDropDown',
                        'returns' => 'html',
                    ),
            ),
        'expiration_notice' =>
            array(
                'required' => false,
                'name' => 'expiration_notice',
                'vname' => 'LBL_EXPIRATION_NOTICE',
                'type' => 'datetimecombo',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'size' => '20',
                'enable_range_search' => false,
                'dbType' => 'datetime',
                'display_default' => 'now&12:00am',
            ),
        'type' =>
            array(
                'required' => false,
                'name' => 'type',
                'vname' => 'LBL_TYPE',
                'type' => 'enum',
                'massupdate' => 0,
                'default' => 'Contract',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'len' => 100,
                'size' => '20',
                'options' => 'contract_type_list',
                'studio' => 'visible',
                'dependency' => false,
            ),
        'start_date' =>
            array(
                'required' => false,
                'name' => 'start_date',
                'vname' => 'LBL_START_DATE',
                'type' => 'date',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'size' => '20',
                'enable_range_search' => false,
                'display_default' => 'now',
            ),
        'end_date' =>
            array(
                'required' => false,
                'name' => 'end_date',
                'vname' => 'LBL_END_DATE',
                'type' => 'date',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'size' => '20',
                'enable_range_search' => false,
                'display_default' => 'now',
            ),
        'customer_signed_date' =>
            array(
                'required' => false,
                'name' => 'customer_signed_date',
                'vname' => 'LBL_CUSTOMER_SIGNED_DATE',
                'type' => 'date',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'size' => '20',
                'enable_range_search' => false,
                'display_default' => 'now',
            ),
        'company_signed_date' =>
            array(
                'required' => false,
                'name' => 'company_signed_date',
                'vname' => 'LBL_COMPANY_SIGNED_DATE',
                'type' => 'date',
                'massupdate' => 0,
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'size' => '20',
                'enable_range_search' => false,
                'display_default' => 'now',
            ),

        'ua_contracts_documents' => array(
            'name' => 'ua_contracts_documents',
            'type' => 'link',
            'relationship' => 'ua_contracts_documents',
            'source' => 'non-db',
            'vname' => 'LBL_DOCUMENTS',
        ),

        'tasks' => array(
            'name' => 'tasks',
            'type' => 'link',
            'relationship' => 'ua_contracts_tasks',
            'module' => 'Tasks',
            'bean_name' => 'Task',
            'source' => 'non-db',
            'vname' => 'LBL_TASKS',
        ),
        'notes' => array(
            'name' => 'notes',
            'type' => 'link',
            'relationship' => 'ua_contracts_notes',
            'module' => 'Notes',
            'bean_name' => 'Note',
            'source' => 'non-db',
            'vname' => 'LBL_NOTES',
        ),
        'meetings' => array(
            'name' => 'meetings',
            'type' => 'link',
            'relationship' => 'ua_contracts_meetings',
            'module' => 'Meetings',
            'bean_name' => 'Meeting',
            'source' => 'non-db',
            'vname' => 'LBL_MEETINGS',
        ),
        'calls' => array(
            'name' => 'calls',
            'type' => 'link',
            'relationship' => 'ua_contracts_calls',
            'module' => 'Calls',
            'bean_name' => 'Call',
            'source' => 'non-db',
            'vname' => 'LBL_CALLS',
        ),

        'ua_quotes' => array(
            'name' => 'ua_quotes',
            'type' => 'link',
            'vname' => 'LBL_QUOTES',
            'relationship' => 'ua_contracts_quotes',
            'link_type' => 'one',
            'source' => 'non-db',
        ),
        'ua_products' => array(
            'name' => 'ua_products',
            'type' => 'link',
            'vname' => 'LBL_PRODUCTS',
            'relationship' => 'ua_contracts_products',
            'link_type' => 'one',
            'source' => 'non-db',
        ),
    ),
    'relationships' => array(
        'ua_contracts_documents' => array(
            'lhs_module' => 'UA_Contracts',
            'lhs_table' => 'ua_contracts',
            'lhs_key' => 'id',
            'rhs_module' => 'Documents',
            'rhs_table' => 'documents',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'linked_documents',
            'join_key_lhs' => 'parent_id',
            'join_key_rhs' => 'document_id',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'UA_Contracts'
        ),

        'ua_contracts_tasks' => array(
            'lhs_module' => 'UA_Contracts',
            'lhs_table' => 'ua_contracts',
            'lhs_key' => 'id',
            'rhs_module' => 'Tasks',
            'rhs_table' => 'tasks',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'UA_Contracts'
        ),

        'ua_contracts_notes' => array(
            'lhs_module' => 'UA_Contracts',
            'lhs_table' => 'ua_contracts',
            'lhs_key' => 'id',
            'rhs_module' => 'Notes',
            'rhs_table' => 'notes',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'UA_Contracts'
        ),

        'ua_contracts_meetings' => array(
            'lhs_module' => 'UA_Contracts',
            'lhs_table' => 'ua_contracts',
            'lhs_key' => 'id',
            'rhs_module' => 'Meetings',
            'rhs_table' => 'meetings',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'UA_Contracts'
        ),

        'ua_contracts_calls' => array(
            'lhs_module' => 'UA_Contracts',
            'lhs_table' => 'ua_contracts',
            'lhs_key' => 'id',
            'rhs_module' => 'Calls',
            'rhs_table' => 'calls',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'UA_Contracts'
        ),
    ),
    'optimistic_locking' => true,
    'unified_search' => true,
);

if (!class_exists('VardefManager'))
{
    require_once('include/SugarObjects/VardefManager.php');
}

VardefManager::createVardef('UA_Contracts', 'UA_Contracts', array(
    'basic',
    'assignable'
));