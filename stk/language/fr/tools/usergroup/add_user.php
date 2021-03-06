<?php
/**
*
* This file is part of French STK translation.
* Copyright (c) 2010 - 2011 Maël Soucaze.
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; version 2 of the License.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along
* with this program; if not, write to the Free Software Foundation, Inc.,
* 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*
* @package   Support Toolkit - Add User
* @author    Maël Soucaze <maelsoucaze@gmail.com> (Maël Soucaze) http://mael.soucaze.com/
* @copyright (c) 2009 phpBB Group
* @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License
* @version   $Id$
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ADD_USER'				=> 'Ajouter un utilisateur',
	'ADD_USER_GROUP'		=> 'Ajouter un utilisateur aux groupes',

	'DEFAULT_GROUP'			=> 'Groupe par défaut',
	'DEFAULT_GROUP_EXPLAIN'	=> 'Le groupe par défaut de cet utilisateur.',

	'GROUP_LEADER'			=> 'Responsable du groupe',
	'GROUP_LEADER_EXPLAIN'	=> 'Faire de cet utilisateur le responsable des groupes sélectionnés.',

	'USER_ADDED'			=> 'L’utilisateur a été créé avec succès !',
	'USER_GROUPS'			=> 'Groupes d’utilisateurs',
	'USER_GROUPS_EXPLAIN'	=> 'Faire de cet utilisateur un membre des groupes sélectionnés.',
));