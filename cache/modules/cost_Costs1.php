<?php

require_once('include/SugarObjects/templates/sale/Sale.php');

class cost_Costs extends Sale
{
    public $new_schema = true;
    public $module_dir = 'cost_Costs';
    public $object_name = 'cost_Costs';
    public $table_name = 'cost_costs';
    public $importable = true;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
    public $cost_costs_type;
    public $lead_source;
    public $amount;
    public $amount_usdollar;
    public $currency_id;
    public $currency_name;
    public $currency_symbol;
    public $date_closed;
    public $next_step;
    public $sales_stage;
    public $probability;
	
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }
	
}