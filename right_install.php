<?php
/***
* Usage:
* Download and unzip the file, upload it to your Board's root (i.e.: www.mydomain.com/phpBB3/)
* Point your browser to i.e.: www.mydomain.com/phpBB3/right_install.php) and follow instructions.
*
* @package - right_install.php 2.0.0-b2 (true versions comparison and more)
* @copyright (c) 2016 3Di (Marco T.) 01-Apr-2016
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Some code taken from modission_reset by Oyabun
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);

/* Vars */
$db_vers = $config['version'];
$version = PHPBB_VERSION;
$php_version = PHP_VERSION;
$styles_path = ($phpbb_root_path . 'styles');
$files = glob('styles/*/style.cfg');
$default_style = ((int) $config['default_style']);
$langs_path = ($phpbb_root_path . 'language');

/* We backport the original function phpbb_version_compare just in case is not present*/
$olympus_old = '3.0.10-RC1';
$old_olympus = ((version_compare(PHPBB_VERSION, $olympus_old, "<")) ? true : false);

if ($old_olympus)
{
	function phpbb_version_compare($version1, $version2, $operator = null)
	{
		$version1 = strtolower($version1);
		$version2 = strtolower($version2);

		if (is_null($operator))
		{
			return version_compare($version1, $version2);
		}
		else
		{
			return version_compare($version1, $version2, $operator);
		}
	}
}

/* Ok, we can finally use the original function phpbb_version_compare from now on */
$rhea = (phpbb_version_compare($db_vers, '3.2.0@dev', ">=")) ? true : false;
$ascraeus = ((phpbb_version_compare($db_vers, '3.1.0@dev', ">")) && (phpbb_version_compare($db_vers, '3.2.0@dev', '<'))) ? true : false;
$olympus = ((phpbb_version_compare(PHPBB_VERSION, '3.1.0@dev', "<")) && (phpbb_version_compare($db_vers, '3.1.0@dev', "<")) ? true : false);

/* If ANONYMOUS = login box */
if ((int) $user->data['user_id'] == ANONYMOUS)
{
	login_box(request_var('redirect', "right_install.$phpEx"));
}
if ((int) $user->data['user_type'] == USER_FOUNDER || $auth->acl_get('a_'))
{
	/* The party begins. If not correct versions tell them */
	if ($rhea || (!$olympus))
	{
		if ((phpbb_version_compare(PHPBB_VERSION, $db_vers, "<>")) || (version_compare(PHP_VERSION, '5.4.0', '<')) || (version_compare(PHP_VERSION, '7.1', '>')))
		{
			echo '<strong style="color:red">Versions mismatch:</strong><br />Your CONSTANTS file belongs to phpBB <font style="color:red">' . $version . '</font><br />Your DB says you are running phpBB <font style="color:red">' . $db_vers . '</font><br />Your PHP version says you are running PHP <font style="color:red">' . $php_version . '</font><br />';
		}
		else if ((phpbb_version_compare(PHPBB_VERSION, $db_vers, "=")) && (version_compare(PHP_VERSION, '5.4.0', '>')) || (version_compare(PHP_VERSION, '7.1', '=<')))
		{
			echo '<strong style="color:green">Congratulations!</strong><br />Your CONSTANTS file belongs to phpBB <font style="color:green">' . $version . '</font><br />Your DB says you are running phpBB <font style="color:green">' . $db_vers . '</font><br />Your PHP version says you are running PHP <font style="color:green">' . $php_version . '</font><br />';
		}
	}
	else if ($ascraeus || (!$olympus))
	{
		if ((phpbb_version_compare(PHPBB_VERSION, $db_vers, "<>")) || (version_compare(PHP_VERSION, '5.3.3', '<')) || (version_compare(PHP_VERSION, '7.0.0', '>=')))
		{
			echo '<strong style="color:red">Versions mismatch:</strong><br />Your CONSTANTS file belongs to phpBB <font style="color:red">' . $version . '</font><br />Your DB says you are running phpBB <font style="color:red">' . $db_vers . '</font><br />Your PHP version says you are running PHP <font style="color:red">' . $php_version . '</font><br />';
		}
		else if ((phpbb_version_compare(PHPBB_VERSION, $db_vers, "=")) && (version_compare(PHP_VERSION, '5.3.3', '>')) && (version_compare(PHP_VERSION, '7.0.0', '<')))
		{
			echo '<strong style="color:green">Congratulations!</strong><br />Your CONSTANTS file belongs to phpBB <font style="color:green">' . $version . '</font><br />Your DB says you are running phpBB <font style="color:green">' . $db_vers . '</font><br />Your PHP version says you are running PHP <font style="color:green">' . $php_version . '</font><br />';
		}
	}
	else if ($olympus)
	{
		if ((phpbb_version_compare(PHPBB_VERSION, $db_vers, "<>")) || (version_compare(PHP_VERSION, '4.3.3', '<')) || (version_compare(PHP_VERSION, '7.0.0', '>=')))
		{
			echo '<strong style="color:red">Versions mismatch:</strong><br />Your CONSTANTS file belongs to phpBB <font style="color:red">' . $version . '</font><br />Your DB says you are running phpBB <font style="color:red">' . $db_vers . '</font><br />Your PHP version says you are running PHP <font style="color:red">' . $php_version . '</font><br />';
		}
		else if ((phpbb_version_compare(PHPBB_VERSION, $db_vers, "=")) && (version_compare(PHP_VERSION, '4.3.3', '>')) && (version_compare(PHP_VERSION, '7.0.0', '<')))
		{
			echo '<strong style="color:green">Congratulations!</strong><br />Your CONSTANTS file belongs to phpBB <font style="color:green">' . $version . '</font><br />Your DB says you are running phpBB <font style="color:green">' . $db_vers . '</font><br />Your PHP version says you are running PHP <font style="color:green">' . $php_version . '</font><br />';
		}
	}

	echo '<strong style="color:purple">The following stats are just for information purposes at the present time</strong><br />';

	if (file_exists($phpbb_root_path . 'config.' . $phpEx))
		{
		echo 'The file config.php <font style="color:green">exists</font>, size: ' . filesize($phpbb_root_path . 'config.' . $phpEx) . ' bytes<br />';
	}
	else
	{
		echo 'The file config.php <font style="color:red">does not exists</font><br />';
	}

	echo 'Available stream wrappers: <font style="color:green">' . implode(', ', stream_get_wrappers()) . '</font><br />';

	//•The following PHP modules are required:
	// json										----> for ascraeus and rhea
	// getimagesize() function must be enabled	----> For all
	if (@extension_loaded('json'))
	{
		echo 'PHP module json: <font style="color:green">loaded</font><br />';
	}
	else if (!@extension_loaded('json'))
	{
		echo 'PHP module json: <font style="color:red">not loaded</font>, required only for Acraeus and Rhea<br />';
	}
	else
	{
		echo 'PHP module json: <font style="color:red">Critical Error while finding the PHP module json</font><br />';
	}

	if (@function_exists('getimagesize'))
	{
		echo 'PHP module getimagesize: <font style="color:green">loaded</font><br />';
	}
	else if (!@function_exists('getimagesize'))
	{
		echo 'PHP module getimagesize <font style="color:red">not loaded</font><br />';
	}
	else
	{
		echo 'PHP module getimagesize: <font style="color:red">Critical Error while finding the PHP module getimagesize</font><br />';
	}

	/* List of available styles (version) */
	if (is_array($files))
	{
		/* The styles/template/all folder has been added since 3.2.0-a1 */
		if (phpbb_version_compare($db_vers, '3.2.0-a1', ">="))
		{
			if (!preg_match('/^[A-Za-z]+\all$/', $folder))
			{
				foreach (array_slice(scandir($styles_path), 3) as $folder)
				{
					$style_names[] = substr($folder, 0);
				}
			}
		}
		else if (phpbb_version_compare($db_vers, '3.2.0-a1', "<"))
		{
			foreach (array_slice(scandir($styles_path), 2) as $folder)
			{
				$style_names[] = substr($folder, 0);
			}
		}
		foreach ($files as $file)
		{
			$content = file_get_contents($file);
			if ($olympus)
			{
				$preggy = (preg_match('/version\s*=\s*(.+?)\s*$/', $content, $match) === 1);
			}
			else if (!$olympus)
			{
				$preggy = (preg_match('/phpbb_version\s?=\s?(.+?)\s/', $content, $match) === 1);
			}
			else if (($ascraeus) || ($rhea))
			{
				$preggy = (preg_match('/phpbb_version\s?=\s?(.+?)\s/', $content, $match) === 1);
			}
			if ($preggy)
			{
				if ((phpbb_version_compare($match[1], PHPBB_VERSION, "=")) && (phpbb_version_compare($match[1], $db_vers, "=")))
				{
					$match[1] = '<font style="color:green">' . $match[1] . '</font>';
				}
				else if ((phpbb_version_compare($match[1], PHPBB_VERSION, "<>")) || (phpbb_version_compare($match[1], $db_vers, "<>")))
				{
					$match[1] = '<font style="color:red">' . $match[1] . '</font>';
				}
				$style_phpbb_version[] = $match[1];
			}
		}

		if (!array_combine($style_names, $style_phpbb_version))
		{
			trigger_error('One or more styles uploaded are for a different version of phpBB<br />or the uploaded style/s have been wrongly uploaded, check the styles folders.', E_USER_ERROR);
		}

		$name_version_array = array_combine($style_names, $style_phpbb_version);

		foreach ($name_version_array as $key => $value)
		{
			$availables = '<font style="color:blue">' . $key . '</font>' . ' (' . $value . ')';
			$avail_ary[] = $availables;
		}
	}
	$availables = implode(', ', $avail_ary);

	/* 3.1.x/3.2.x styles installed */
	if (($ascraeus) || ($rhea) || (!$olympus))
	{
		$sql = 'SELECT style_id, style_path
			FROM ' . STYLES_TABLE . '
			GROUP BY style_id';
		$result = $db->sql_query($sql);
		while ($rows = $db->sql_fetchrow($result))
		{
			$style_path[] = $rows['style_path'];
			$styles_ids[] = $rows['style_id'];
			$names[$rows['style_path']] = $rows['style_path'];
		}
		$db->sql_freeresult($result);
	}
	else if ($olympus)
	{
		/* OLYMPUS: styles installed */
		$sql = 'SELECT *
			FROM ' . STYLES_TEMPLATE_TABLE . '
			GROUP BY template_id';
		$result = $db->sql_query($sql);
		while ($rows = $db->sql_fetchrow($result))
		{
			$style_path[] = $rows['template_path'];
			$styles_ids[] = $rows['template_id'];
			$names[$rows['template_path']] = $rows['template_path'];
		}
		$db->sql_freeresult($result);
	}
	$name_id_ary = array_combine($styles_ids, $style_path);
	$styles_installed = implode(', ', $names);

	/* 3.1.x/3.2.x - Default style */
	if (($ascraeus) || ($rhea) || (!$olympus))
	{
		$sql = 'SELECT style_id, style_path
			FROM ' . STYLES_TABLE . '
			WHERE style_id = ' . $default_style . '
			GROUP BY style_path';
		$result = $db->sql_query_limit($sql, 1);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		$true_default = $row['style_path'];
	}
	else if ($olympus)
	{
		/* Default style */
		$sql = 'SELECT template_id, template_path
			FROM ' . STYLES_TEMPLATE_TABLE . '
			WHERE template_id = ' . $default_style . '
			GROUP BY template_path';
		$result = $db->sql_query_limit($sql, 1);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		$true_default = $row['template_path'];
	}

	if (($ascraeus) || ($rhea) || (!$olympus))
	{
	/* Return a list of styles from the DB, those in use by the Users and counts*/
		$sql = 'SELECT u.user_style, s.style_id, s.style_path, COUNT(u.user_style) AS style_count
			FROM ' . USERS_TABLE . ' u, ' . STYLES_TABLE . ' s
				WHERE u.user_style = s.style_id
			GROUP BY s.style_path';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$style_count[$row['style_count']] = $row['style_path'];
			$count[$row['style_count']] = $row['style_count'];
		}
		$db->sql_freeresult($result);
	}
	else if ($olympus)
	{
	/* Return a list of styles from the DB, those in use by the Users and counts*/
		$sql = 'SELECT u.user_style, s.template_id, s.template_path, COUNT(u.user_style) AS style_count
			FROM ' . USERS_TABLE . ' u, ' . STYLES_TEMPLATE_TABLE . ' s
				WHERE u.user_style = s.template_id
			GROUP BY s.template_path';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$style_count[$row['style_count']] = $row['template_path'];
			$count[$row['style_count']] = $row['style_count'];
		}
		$db->sql_freeresult($result);
	}

	$name_count_array = array_combine($style_count, $count);
	foreach ($name_count_array as $key => $value)
	{
		$avail = $key . ' <font style="color:purple">(' . $value . ')</font>';
		$style_and_count[] = $avail;
	}
	$styles_in_use = implode(', ', $style_and_count);

	if (($ascraeus) || ($rhea))
	{
		echo 'Styles (phpBB ver) available: ' . $availables;
	}
	else if ($olympus)
	{
		echo 'Styles (ver) available: ' . $availables;
	}
	else
	{
		echo 'Styles available: <font style="color:red">Critical error, unable to fetch this data!</font>';
	}
	echo '<br />Default style of the Board (for new users): <font style="color:purple">' . $true_default . '</font><br />';
	echo 'Styles installed: <font style="color:green">' . $styles_installed . '</font><br />';
	echo 'Styles in use (incl. bots and guests): <font style="color:blue">' . $styles_in_use . '</font><br />';
	echo 'Override user style: ' . ($config['override_user_style'] ? '<font style="color:blue">Yes</font>' : '<font style="color:blue">No</font>') . '<br />';

	/* checks which langs are into the folder */
	foreach (array_slice(scandir($langs_path), 2) as $folder)
	{
		/* get rid of index.htm or similars from the array */
		if (!preg_match('/^[A-Za-z]+\.htm$/', $folder))
		$langs_names[] = substr($folder, 0);
	}
	$lang_avail = implode(', ', $langs_names);
	$lang_availables = '<font style="color:blue">' . $lang_avail . '</font>';

	/* check which langs are in use by the users and count */
	$sql = 'SELECT user_lang, COUNT(user_lang) AS lang_count
		FROM ' . USERS_TABLE . '
		GROUP BY user_lang';
	$result = $db->sql_query($sql);
	while ($row = $db->sql_fetchrow($result))
	{
		$lang_name[$row['user_lang']] = $row['user_lang'];
		$lang_count[$row['user_lang']] = $row['lang_count'];
	}
	$db->sql_freeresult($result);

	$lang_count_array = array_combine($lang_name, $lang_count);
	foreach ($lang_count_array as $key => $value)
	{
		$avail = $key . ' <font style="color:purple">(' . $value . ')</font>';
		$lang_and_count[] = $avail;
	}
	$langs_in_use = implode(', ', $lang_and_count);

	/* Return a list of languages from the DB, those in installed */
	$sql = 'SELECT lang_id, lang_local_name
		FROM ' . LANG_TABLE . '
		ORDER BY lang_id';
	$result = $db->sql_query($sql);
	while ($row = $db->sql_fetchrow($result))
	{
		$lang_names[] = $row['lang_local_name'];
	}
	$db->sql_freeresult($result);
	$langs_installed = implode(', ', $lang_names);

	echo 'Languages available: ' . $lang_availables . '<br />';
	echo 'Your Board\'s default language is <strong style="color:blue">' . $config['default_lang'] . '</strong><br />';
	echo 'Languages installed: <font style="color:green">' . $langs_installed . '</font><br />';
	echo 'Languages in use (incl. bots and guests): <font style="color:blue">' . $langs_in_use . '</font>';

	/* cookies for Olympus */
	if ($olympus)
	{
		if (!empty($_SERVER['SERVER_NAME']))
		{
			$url = $_SERVER['SERVER_NAME'];
		}

		// Running on IIS?
		if (!empty($_SERVER['LOCAL_ADDR']))
		{
			$url = $_SERVER['LOCAL_ADDR'];
		}
	}
	/* cookies for Ascraeus/Rhea */
	else if (($ascraeus) || ($rhea) || (!$olympus))
	{
		$url = $request->server('SERVER_NAME', '');
	}
	echo '<br /><font style="color:purple">Server name: </font><font style="color:blue">' . $url . '</font>';
	echo '<br /><font style="color:purple">Cookie domain: </font><font style="color:blue">' . $config['cookie_domain'] . '</font>';
	echo '<br /><font style="color:purple">Cookie name: </font><font style="color:blue">' . $config['cookie_name'] . '</font>';
	echo '<br /><font style="color:purple">Cookie path: </font><font style="color:blue">' . $config['cookie_path'] . '</font>';
	$secure = ($config['cookie_secure']) ? 'Enabled' : 'Disabled';
	echo '<br /><font style="color:purple">Cookie secure: </font><font style="color:blue">' . $secure . '</font>';

	echo '<br /><font style="color:purple">DB info: </font><font style="color:blue">' . $db->sql_server_info() . '</font>';

	echo '<br /><font style="color:purple">ImageMagick path: </font><font style="color:blue">' . $config['img_imagick'] . '</font>';

	/* Let's check some folders' perms */
	if ($perms = "0777")
	{
		$perm_col = '</font><font style="color:green">' . $perms . '</font>';
	}
	else
	{
		$perm_col = '</font><font style="color:red">' . $perms . '</font>';
	}
	$cache_dir = ($phpbb_root_path . 'cache');
	$perms = substr(sprintf('%o', fileperms($cache_dir)), -4);
	echo '<br /><font style="color:purple">Cache folder chmod: </font>' . $perm_col . '';

	$store_dir = ($phpbb_root_path . 'store');
	$perms = substr(sprintf('%o', fileperms($store_dir)), -4);
	echo '<br /><font style="color:purple">Store folder chmod: </font>' . $perm_col . '';

	$files_dir = ($phpbb_root_path . 'files');
	$perms = substr(sprintf('%o', fileperms($files_dir)), -4);
	echo '<br /><font style="color:purple">Files folder chmod: ' . $perm_col . '';

	$av_up_dir = ($phpbb_root_path . 'images/avatars/upload');
	$perms = substr(sprintf('%o', fileperms($av_up_dir)), -4);
	echo '<br /><font style="color:purple">Images/avatar/upload folder chmod: </font>' . $perm_col . '';

	/* Hasta la vista! */
	echo '<br /><font color="blue">Copy-paste these results or make a screenshot for further support...<br />...I am self destroying, hasta la vista!</font><br /><br />';

	echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="ZLN6KTV2WQSRN"><input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online."><img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1"><font color="darkred"> Help the development of this Tool by a donation of your choice.</font></form>';

	/* uncomment the following line to turn on PHP info. */
	//phpinfo();

	/* comment out the following line to turn off the self-destroyer. */
	remove_me();
}
else
{
	/* If logged in without the right permissions, stop everything and self-destroy */
	remove_me();
	trigger_error('You don\'t have permission to access the database and files. You need to be logged in as a founder or administrator.');
}

/* Attempting to delete this file */
function remove_me()
{
	@unlink(__FILE__);

	/** Windows IIS servers may have a problem with unlinking recently created files.
	* * So check if file exists and give a message
	*/
	if (file_exists(__FILE__))
	{
		echo '<strong color="red">File could not be deleted.</strong> You will
		need to manually delete the ' . basename(__FILE__) . ' file from the server.';
	}
}

