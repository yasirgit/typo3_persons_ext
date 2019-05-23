<?php
/** check for typo3 mode */
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\HDNET\Autoloader\Loader::extLocalconf('OH', $_EXTKEY);
