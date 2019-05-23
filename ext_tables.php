<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_persons_domain_model_person');

\HDNET\Autoloader\Loader::extTables('OH', $_EXTKEY);