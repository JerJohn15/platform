<?php

namespace Ushahidi\App\DataProvider\Message;

/**
 * Interface for DataProvider Message Types
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    DataProvider
 * @copyright  2013 Ushahidi
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License Version 3 (GPLv3)
 *
 */
interface Type {

	const SMS = 'sms';
	const TWITTER = 'twitter';
	const IVR = 'ivr';
	const EMAIL = 'email';

}
