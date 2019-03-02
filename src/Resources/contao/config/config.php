<?php

// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['lostAndFoundAnimals'] = 'Tsz\ContaoLostAndFoundAnimals\Module\LostAndFoundAnimalsModule';



/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['Tiersuchzentrale']['Anzeigenverwaltung'] = array('tables' => array('tl_tsz_lostandfoundanimals'));
$GLOBALS['BE_MOD']['Tiersuchzentrale']['Helfersystem'] = array('tables' => array('tl_tsz_supporters'));