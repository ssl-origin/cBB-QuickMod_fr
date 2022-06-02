<?php
/*
* main.php [French [fr]]]
* @package Ext Common Core
* @version v1.0.8 12/01/2021
*
* @copyright (c) 2021 CaniDev
* @license https://opensource.org/licenses/gpl-license.php GNU Public License
* French translation by team caforum (https://caforum.fr/forum/)
*/

// @ignore
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACCEPT'					=> 'Accepter',
	'ALL_GROUPS'				=> 'Tous les groupes',
	'BATCH_ACTIONS'				=> 'Actions par lots',
	'CONFIGURE'					=> 'Configurer',
	'DOCUMENTATION_AND_SUPPORT'	=> 'Documentation et Assistance',
	'EDIT'						=> 'Editer',
	'NO_ITEMS'					=> 'Aucun élément à afficher',
	'SAVE'						=> 'Sauvegarder',
));