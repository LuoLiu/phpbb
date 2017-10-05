<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

class phpbb_php_ini_fake extends \bantu\IniGetWrapper\IniGetWrapper
{
	function get($varname)
	{
		return $varname;
	}
}
