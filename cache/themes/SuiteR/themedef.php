<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$themedef = array(
    'name'  => "Suite R",
    'description' => "SuiteCRM Responsive Theme",
    'version' => array(
        'regex_matches' => array('6\.*.*'),
        ),
    'group_tabs' => true,
    'classic' => true,
    'configurable' => true,
    'config_options' => array(

        'display_sidebar' => array(
            'vname' => 'LBL_DISPLAY_SIDEBAR',
            'type' => 'bool',
            'default' => true
        ),

        'navbar' => array(
            'vname' => 'LBL_COLOUR_ADMIN_BASE',
            'type' => 'colour',
            'default' => '#3C8DBC'
        ),
        'navbar_hover' => array(
            'vname' => 'LBL_COLOUR_ADMIN_MENUHOVER',
            'type' => 'colour',
            'default' => '#597dbc'
        ),
        'navbar_font' => array(
            'vname' => 'LBL_COLOUR_ADMIN_MENUFONT',
            'type' => 'colour',
            'default' => '#ffffff'
        ),
        'navbar_link_hover' => array(
            'vname' => 'LBL_COLOUR_ADMIN_MENULNKHVR',
            'type' => 'colour',
            'default' => '#ffffff'
        ),
        'dropdown_menu' => array(
            'vname' => 'LBL_COLOUR_ADMIN_DDMENU',
            'type' => 'colour',
            'default' => '#f7f7f7'
        ),
        'dropdown_menu_link' => array(
            'vname' => 'LBL_COLOUR_ADMIN_DDLINK',
            'type' => 'colour',
            'default' => '#3C8DBC'
        ),

        'dropdown_menu_link_hover' => array(
            'vname' => 'LBL_COLOUR_ADMIN_DDLINK_HOVER',
            'type' => 'colour',
            'default' => '#ffffff'
        ),

        'action_menu_button' => array(
            'vname' => 'LBL_ACTION_MENU_BUTTON',
            'type' => 'colour',
            'default' => '#eeeeee'
        ),

        'action_menu_background' => array(
            'vname' => 'LBL_ACTION_MENU_BACKGROUND',
            'type' => 'colour',
            'default' => '#F7F7F7'
        ),

        'action_menu_background_hover' => array(
            'vname' => 'LBL_ACTION_MENU_BACKGROUND_HOVER',
            'type' => 'colour',
            'default' => '#3C8DBC'
        ),

        'button' => array(
            'vname' => 'LBL_COLOUR_ADMIN_BTNTOP',
            'type' => 'colour',
            'default' => '#3C8DBC'
        ),
        'button_hover' => array(
            'vname' => 'LBL_COLOUR_ADMIN_BTNHOVER',
            'type' => 'colour',
            'default' => '#597dbc'
        ),
        'button_link' => array(
            'vname' => 'LBL_COLOUR_ADMIN_BTNLNK',
            'type' => 'colour',
            'default' => '#ffffff'
        ),
        'button_link_hover' => array(
            'vname' => 'LBL_COLOUR_ADMIN_BTNLNKHOVER',
            'type' => 'colour',
            'default' => '#ffffff'
        ),

        'page_header' => array(
            'vname' => 'LBL_COLOUR_ADMIN_PAGEHEADER',
            'type' => 'colour',
            'default' => '#19198c'
        ),
        'page_link' => array(
            'vname' => 'LBL_COLOUR_ADMIN_PAGELINK',
            'type' => 'colour',
            'default' => '#3C8DBC'
        ),

        'dashlet' => array(
            'vname' => 'LBL_COLOUR_ADMIN_DASHHEAD',
            'type' => 'colour',
            'default' => '#ffffff'
        ),
        'dashlet_headertext' => array(
            'vname' => 'LBL_COLOUR_ADMIN_DASHHEADTEXT',
            'type' => 'colour',
            'default' => '#3C8DBC'
        ),        
        'icon' => array(
            'vname' => 'LBL_COLOUR_ADMIN_ICON',
            'type' => 'colour',
            'default' => '#ffffff'
        ),
        'suggestion_popup_from' => array(
            'vname' => 'LBL_SUGGESTION_POPUP_FROM',
            'type' => 'colour',
            'default' => '#3c8dbc'
        ),
        'suggestion_popup_to' => array(
            'vname' => 'LBL_SUGGESTION_POPUP_TO',
            'type' => 'colour',
            'default' => '#4286AD'
        ),

    )
);
