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
    'description' => 'Contracts Module',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'UA_Contracts',
    'published_date' => '2014-04-18 00:00:00',
    'type' => 'module',
    'version' => '1.0',
    'remove_tables' => 'prompt',
);

$installdefs = array(
    'id' => 'UA_Contracts_1_0',
    'beans' => array(
        0 => array(
            'module' => 'UA_Contracts',
            'class' => 'UA_Contracts',
            'path' => 'modules/UA_Contracts/UA_Contracts.php',
            'tab' => true,
        ),
    ),
    'layoutdefs' => array(),
	'vardefs' => array(
		array(
			'from' => '<basepath>/vardefs/modules/Documents/ua_contracts_vardefs.php',
			'to_module' => 'Documents',
		),
	),
    'relationships' => array(
		array(
			'module' => 'Opportunities',
			'meta_data' => '<basepath>/relationships/ua_contracts_opportunitiesMetaData.php',
		),
		array(
			'module' => 'UA_Products',
			'meta_data' => '<basepath>/relationships/ua_contracts_productsMetaData.php',
		),
		array(
			'module' => 'UA_Quotes',
			'meta_data' => '<basepath>/relationships/ua_contracts_quotesMetaData.php',
		),
	),
    'image_dir' => '<basepath>/icons',
    'copy' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/modules/UA_Contracts',
            'to' => 'modules/UA_Contracts',
        ),
		1 => array(
            'from' => '<basepath>/SugarModules/custom',
            'to' => 'custom',
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