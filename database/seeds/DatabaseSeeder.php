<?php
/**
 * @author  MyBB Group
 * @version 2.0.0
 * @package mybb/core
 * @license http://www.mybb.com/licenses/bsd3 BSD-3
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('ContentClassTableSeeder');

		$this->call('UsersTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('RoleUserTableSeeder');
		$this->call('PermissionsTableSeeder');
		$this->call('PermissionRoleTableSeeder');

		$this->call('ForumsTableSeeder');

		$this->call('TopicsTableSeeder');
		$this->call('PostsTableSeeder');

		$this->call('UserSettingsTableSeeder');

		$this->call('SettingsTableSeeder');
		$this->call('ProfileFieldsTableSeeder');
	}
}
