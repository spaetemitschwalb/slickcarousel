<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

$GLOBALS['TCA']['sys_file_reference']['palettes']['slickslider'] = [
    'showitem' => 'title,alternative,--linebreak--,crop,description'
];
