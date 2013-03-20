<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array(
	'tx_extendaddrpub_publication' => array(		
		'exclude' => 1,		
		'label' => 'LLL:EXT:extendaddrpub/locallang_db.xml:tt_address.tx_extendaddrpub_publication',		
		'config' => array(
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
					'icon'          => 'wizard_rte2.gif',
					'script'        => 'wizard_rte.php',
				),
			),
		)
	),
);


t3lib_div::loadTCA('tt_address');
t3lib_extMgm::addTCAcolumns('tt_address',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tt_address','tx_extendaddrpub_publication;;;richtext[]:rte_transform[mode=ts];1-1-1');
?>