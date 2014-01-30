<?php

/**
 * PHP version 5
 * @copyright  Copyright (C) 2013 Kirsten Roschanski
 * @author     Kirsten Roschanski <git@kirsten-roschanski.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @package    IsotopeDocuments 
 * @filesource https://github.com/katgirl/isotope_documents
 */
 
/**
 * Table tl_iso_config
 */

// Palettes 
$GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default'] = str_replace
(
    '{config_legend}',
    '{bank_account_legend:hide},bank_name,bank_id,account_number,iban,bic;{config_legend}',
    $GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default']
);
// Palettes 
$GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default'] = str_replace
(
    'vat_no',
    'tax_number,vat_no,register,managing_directors',
    $GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default']
);

// Fields
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['bank_name'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['bank_name'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['bank_id'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['bank_id'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['account_number'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['account_number'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['iban'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['iban'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['bic'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['bic'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['tax_number'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['tax_number'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['register'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['register'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['managing_directors'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_iso_config']['managing_directors'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);
