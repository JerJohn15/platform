<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_3_0_20130410191926 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		// Add 'locale' to Table `posts`
		$db->query(NULL, "ALTER TABLE `posts`
		  ADD COLUMN `locale` VARCHAR(5) NOT NULL DEFAULT 'en_us';");
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		// Remove 'locale' to Table `posts`
		$db->query(NULL, "ALTER TABLE `posts`
		  DROP COLUMN `locale`;");
	}

}
