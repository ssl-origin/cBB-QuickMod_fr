<?php
/*
* editor.php [French [fr]]]
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
	'AUTHOR'					=> 'Auteur :',
	'CODE'						=> 'Code',
	'DATE'						=> 'Date :',
	'DESCRIPTION_OPTIONAL'		=> 'Description (facultatif) :',
	'INSERT'					=> 'Insérer',
	'MAXIMIZE'					=> 'Agrandir l‘éditeur',
	'PRINT'						=> 'Imprimer',
	'REMOVE_FORMAT'				=> 'Supprimer le format',
	'UNLINK'					=> 'Supprimer le lien',
	'URL'						=> 'Url:',
	'VIEW_SOURCE'				=> 'Afficher le code',
));
