<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'slickcarousel', // Extension Key
    'Configuration/TypoScript', // Path to setup.typoscript and constants.typoscript
    'Slick Carousel'            // Title in the selector box
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_slickcarouselbgimg');
$GLOBALS['TCA']['tx_slickcarouselbgimg']['ctrl']['hideTable'] = 1;
