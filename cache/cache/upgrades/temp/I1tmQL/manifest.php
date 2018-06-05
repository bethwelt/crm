<?php
/* YouAddOn Team */

$manifest = array(
    0 => array(
        'acceptable_sugar_versions' => array(
            0 => '',
        ),
    ),
    1 => array(
        'acceptable_sugar_flavors' => array(
            0 => 'CE',
            1 => 'PRO',
            2 => 'ENT',
        ),
    ),
    'readme' => '',
    'key' => 'UA',
    'author' => 'youaddon',
    'description' => 'Manufacturers Module',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'UA_Manufacturers',
    'published_date' => '2014-04-18 00:00:00',
    'type' => 'module',
    'version' => '1.0',
    'remove_tables' => 'prompt',
);

$installdefs = array(
    'id' => 'UA_Manufacturers_1_0',
    'beans' => array(
        0 => array(
            'module' => 'UA_Manufacturers',
            'class' => 'UA_Manufacturers',
            'path' => 'modules/UA_Manufacturers/UA_Manufacturers.php',
            'tab' => true,
        ),
    ),
    'layoutdefs' => array(),
    'relationships' => array(),
    'image_dir' => '<basepath>/icons',
    'copy' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/modules/UA_Manufacturers',
            'to' => 'modules/UA_Manufacturers',
        ),
    ),
	'language' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
            'to_module' => 'application',
            'language' => 'en_us',
        )
    ),
);