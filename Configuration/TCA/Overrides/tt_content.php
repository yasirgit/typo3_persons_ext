<?php

/**
 * Base TCA generation for the table tt_content
 */

$GLOBALS['TCA']['tt_content'] = \HDNET\Autoloader\Utility\ModelUtility::getTcaOverrideInformation('persons', 'tt_content');

// custom manipulation calls here

$custom = array();

$GLOBALS['TCA']['tt_content'] = \HDNET\Autoloader\Utility\ArrayUtility::mergeRecursiveDistinct($GLOBALS['TCA']['tt_content'], $custom);
