<?php
/**
* JoomlaCliTools
*
* @version $Id$
* @package MatWare
* @subpackage JoomlaCliTools
* @copyright Copyright 2004 - 2013 Matias Aguire. All rights reserved.
* @license GNU General Public License version 2 or later.
* @author Matias Aguirre <maguirre@matware.com.ar>
* @link http://www.matware.com.ar
*/

// Prevent direct access to this file outside of a calling application.
defined('_JEXEC') or die;

/**
* JoomlaCliTools configuration class.
*
* @package Matware
* @since 1.0
*/
final class JConfig
{
	/**
	* Simulate login configuration's.
	*/
	public $username = 'admin';
	public $passwd = '';
	public $url = 'http://example.org/';
	public $query = 'index.php?option=com_content&format=raw';
	public $ssl_verifypeer = false;
	public $cookiejar = './cookie.txt';
	public $cookiefile = './cookie.txt';
}
