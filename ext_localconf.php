<?php

use FriendsOfTYPO3\JqueryUi\PageRendererHook;

defined('TYPO3') or die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess']['csp-details'] = PageRendererHook::class . '->addImportMaps';
