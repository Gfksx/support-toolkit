<?php
/**
*
* @package Support Toolkit - Fix Left/Right ID's
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @copyright (c) 2010 phpBB.it - translated on 2010/05/16
* @copyright (c) 2011 portalxl.eu - update translation on 2011/04/06
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'FIX_LEFT_RIGHT_IDS'			=> 'Fissa ID delle righe di sinistra/destra',
	'FIX_LEFT_RIGHT_IDS_CONFIRM'	=> 'Sei sicuro di voler fissare gli ID delle righe di sinistra e destra?<br /><br /><strong>Esegui un backup del tuo database prima di eseguire questo strumento!</strong>',

	'LEFT_RIGHT_IDS_FIX_SUCCESS'	=> 'Gli ID di sinistra e destra sono stati fissati.',
	'LEFT_RIGHT_IDS_NO_CHANGE'		=> 'Lo strumento ha terminato il processo percorrendo gli ID le righe di sinistra e destra, non sono state apportate modifiche, perché le righe risultano tutte corrette.',
));
