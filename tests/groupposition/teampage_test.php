<?php
/**
*
* @package testing
* @copyright (c) 2012 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/


class phpbb_groupposition_teampage_test extends phpbb_database_test_case
{
	public function getDataSet()
	{
		return $this->createXMLDataSet(dirname(__FILE__) . '/fixtures/teampage.xml');
	}

	public function get_group_value_data()
	{
		return array(
			array(2, 3),
			array(6, 8),
		);
	}

	/**
	* @dataProvider get_group_value_data
	*/
	public function test_get_group_value($group_id, $expected)
	{
		global $cache;

		$cache = new phpbb_mock_cache;
		$db = $this->new_dbal();
		$user = new phpbb_user;
		$user->lang = array();

		$test_class = new phpbb_groupposition_teampage($db, $user, '');
		$this->assertEquals($expected, $test_class->get_group_value($group_id));
	}

	public function test_get_group_count()
	{
		global $cache;

		$cache = new phpbb_mock_cache;
		$db = $this->new_dbal();
		$user = new phpbb_user;
		$user->lang = array();

		$test_class = new phpbb_groupposition_teampage($db, $user, '');
		$this->assertEquals(8, $test_class->get_group_count());
	}

	public function add_group_teampage_data()
	{
		return array(
			array(1, 2, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(6, 2, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(7, 2, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 7, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 6, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 7, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 9, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(7, 0, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 9, 'group_id' => 7, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
		);
	}

	/**
	* @dataProvider add_group_teampage_data
	*/
	public function test_add_group_teampage($group_id, $parent_id, $expected)
	{
		global $cache;

		$cache = new phpbb_mock_cache;
		$db = $this->new_dbal();
		$user = new phpbb_user;
		$user->lang = array();

		$test_class = new phpbb_groupposition_teampage($db, $user, '');
		$test_class->add_group_teampage($group_id, $parent_id);

		$result = $db->sql_query('SELECT teampage_position, group_id, teampage_parent, teampage_name
			FROM ' . TEAMPAGE_TABLE . '
			ORDER BY teampage_position ASC');

		$this->assertEquals($expected, $db->sql_fetchrowset($result));
	}

	public function add_category_teampage_data()
	{
		return array(
			array('new', array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 9, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'new'),
			)),
		);
	}

	/**
	* @dataProvider add_category_teampage_data
	*/
	public function test_add_category_teampage($group_name, $expected)
	{
		global $cache;

		$cache = new phpbb_mock_cache;
		$db = $this->new_dbal();
		$user = new phpbb_user;
		$user->lang = array();

		$test_class = new phpbb_groupposition_teampage($db, $user, '');
		$test_class->add_category_teampage($group_name);

		$result = $db->sql_query('SELECT teampage_position, group_id, teampage_parent, teampage_name
			FROM ' . TEAMPAGE_TABLE . '
			ORDER BY teampage_position ASC');

		$this->assertEquals($expected, $db->sql_fetchrowset($result));
	}

	public function delete_group_data()
	{
		return array(
			array(1, array(
				array('teampage_position' => 1, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 2, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 3, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 5, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 6, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(2, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 5, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 6, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(6, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
			)),
		);
	}

	/**
	* @dataProvider delete_group_data
	*/
	public function test_delete_group($group_id, $expected)
	{
		global $cache;

		$cache = new phpbb_mock_cache;
		$db = $this->new_dbal();
		$user = new phpbb_user;
		$user->lang = array();

		$test_class = new phpbb_groupposition_teampage($db, $user, '');
		$test_class->delete_group($group_id, false);

		$result = $db->sql_query('SELECT teampage_position, group_id, teampage_parent, teampage_name
			FROM ' . TEAMPAGE_TABLE . '
			ORDER BY teampage_position ASC');

		$this->assertEquals($expected, $db->sql_fetchrowset($result));
	}

	public function delete_teampage_data()
	{
		return array(
			array(1, array(
				array('teampage_position' => 1, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 2, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 3, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 5, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 6, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(2, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 3, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
		);
	}

	/**
	* @dataProvider delete_teampage_data
	*/
	public function test_delete_teampage($teampage_id, $expected)
	{
		global $cache;

		$cache = new phpbb_mock_cache;
		$db = $this->new_dbal();
		$user = new phpbb_user;
		$user->lang = array();

		$test_class = new phpbb_groupposition_teampage($db, $user, '');
		$test_class->delete_teampage($teampage_id, false);

		$result = $db->sql_query('SELECT teampage_position, group_id, teampage_parent, teampage_name
			FROM ' . TEAMPAGE_TABLE . '
			ORDER BY teampage_position ASC');

		$this->assertEquals($expected, $db->sql_fetchrowset($result));
	}

	public function move_data()
	{
		return array(
			array(1, 1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(2, 1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(5, 1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(6, 1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 6, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 7, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
			)),
			array(1, -1, array(
				array('teampage_position' => 1, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 2, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 3, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(2, -1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(5, -1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(6, -1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
		);
	}

	/**
	* @dataProvider move_data
	*/
	public function test_move($group_id, $move_delta, $expected)
	{
		global $cache;

		$cache = new phpbb_mock_cache;
		$db = $this->new_dbal();
		$user = new phpbb_user;
		$user->lang = array();

		$test_class = new phpbb_groupposition_teampage($db, $user, '');
		$test_class->move($group_id, $move_delta);

		$result = $db->sql_query('SELECT teampage_position, group_id, teampage_parent, teampage_name
			FROM ' . TEAMPAGE_TABLE . '
			ORDER BY teampage_position ASC');

		$this->assertEquals($expected, $db->sql_fetchrowset($result));
	}

	public function move_teampage_data()
	{
		return array(
			array(1, 1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(2, 1, array(
				array('teampage_position' => 1, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 2, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 3, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(5, 1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 3, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 6, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(6, 1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(1, -1, array(
				array('teampage_position' => 1, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 2, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 3, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(2, -1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 3, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 6, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
			array(5, -1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 6, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 7, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
			)),
			array(6, -1, array(
				array('teampage_position' => 1, 'group_id' => 1, 'teampage_parent' => 0, 'teampage_name' => ''),
				array('teampage_position' => 2, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category - 2 children'),
				array('teampage_position' => 3, 'group_id' => 2, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 4, 'group_id' => 3, 'teampage_parent' => 2, 'teampage_name' => ''),
				array('teampage_position' => 5, 'group_id' => 0, 'teampage_parent' => 0, 'teampage_name' => 'category2 - 2 children'),
				array('teampage_position' => 6, 'group_id' => 5, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 7, 'group_id' => 4, 'teampage_parent' => 5, 'teampage_name' => ''),
				array('teampage_position' => 8, 'group_id' => 6, 'teampage_parent' => 0, 'teampage_name' => ''),
			)),
		);
	}

	/**
	* @dataProvider move_teampage_data
	*/
	public function test_move_teampage($teampage_id, $move_delta, $expected)
	{
		global $cache;

		$cache = new phpbb_mock_cache;
		$db = $this->new_dbal();
		$user = new phpbb_user;
		$user->lang = array();

		$test_class = new phpbb_groupposition_teampage($db, $user, '');
		$test_class->move_teampage($teampage_id, $move_delta);

		$result = $db->sql_query('SELECT teampage_position, group_id, teampage_parent, teampage_name
			FROM ' . TEAMPAGE_TABLE . '
			ORDER BY teampage_position ASC');

		$this->assertEquals($expected, $db->sql_fetchrowset($result));
	}
}

