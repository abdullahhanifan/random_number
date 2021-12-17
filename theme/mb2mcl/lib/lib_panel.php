<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_mb2mcl
 * @copyright 2020 Mariusz Boloz (https://mb2themes.com)
 * @license   Commercial https://themeforest.net/licenses
 *
 */



defined('MOODLE_INTERNAL') || die();





/*
 *
 * Method to get search form
 *
 */
function theme_mb2mcl_panel_links()
{

    global $PAGE, $OUTPUT, $USER, $CFG;

    $output = '';
    $isLoginPage = theme_mb2mcl_is_login($PAGE);
    $loginicon = (!isloggedin() or isguestuser()) ? 'lni-lock' : 'lni-user';
    $logincls = (isloggedin() && !isguestuser()) ? ' loggedin' : '';
    $loginstring = (!isloggedin() or isguestuser())? get_string('login') :  $USER->firstname;
    $close_text = get_string('closebuttontitle', 'core');
    $langs = get_string_manager()->get_list_of_translations();
    $headerbtn = theme_mb2mcl_theme_setting( $PAGE, 'headerbtn' );

    if ( $CFG->langmenu && count( $langs ) > 1 )
    {
        $output .= '<div class="header-tools-item tool-language">';
        $output .= '<a href="#" class="header-tools-btn header-tools-btn-js language-btn" title="">';
        $output .= '<span>' . theme_mb2mcl_language_code(current_language()) . '</span>';
        $output .= '<i class="lni-world"></i>';
        $output .= '</a>';
        $output .= theme_mb2mcl_language_list();
        $output .= '</div>';
    }

    if ( theme_mb2mcl_theme_setting( $PAGE, 'navbarplugin' ) && isloggedin() && ! isguestuser() )
    {
        $output .= '<div class="header-tools-item theme-plugins">';
        $output .= $OUTPUT->navbar_plugin_output();
        $output .= '</div>';
    }

    $output .= '<div class="header-tools-item tool-search">';
    $output .= '<a href="#" class="header-tools-btn header-tools-btn-js search-btn" title="' . get_string('search','core') . '">';
    $output .= '<i class="lni-search"></i>';
    $output .= '</a>';
    $output .= theme_mb2mcl_search_form();
    $output .= '</div>';

    if ( ! $isLoginPage )
    {

        $link_to_login = theme_mb2mcl_theme_setting($PAGE,'loginlinktopage');
		$login_link = '#';
        $isjslink = ' header-tools-btn-js';

		if ( ( ! isloggedin() || isguestuser() ) && $link_to_login )
        {
            $isjslink = '';

            if ($CFG->alternateloginurl)
            {
                $login_link = $CFG->alternateloginurl;
            }
            else
            {
  			    $login_link = new moodle_url( $CFG->wwwroot . '/login/index.php',array() );
            }
        }

        $output .= '<div class="header-tools-item tool-login">';
        $output .= '<a href="' . $login_link . '" class="header-tools-btn login-btn' . $logincls . $isjslink . '" title="' . $loginstring . '">';
        $output .= '<i class="' . $loginicon . '"></i>';
        $output .= '</a>';
        $output .= theme_mb2mcl_login_form();
        $output .= '</div>';
    }

    if ( $headerbtn )
    {
        $output .= '<div class="header-tools-item tool-buttons">';
        $output .= theme_mb2mcl_static_content( $headerbtn, array( 'nolist' => 0, 'linkcls' => 'btn btn-secondary' ) );
        $output .= '</div>';
    }



    return $output;

}




/*
 *
 * Method to get search form
 *
 */
function theme_mb2mcl_search_form ()
{
	global $CFG, $PAGE;

	$output = '';
    $cls = ' noglobalsearch';
    $search_action = new moodle_url($CFG->wwwroot . '/course/search.php',array());
    $search_action_global = new moodle_url($CFG->wwwroot . '/search/index.php',array());
	$search_text = get_string('searchcourses');
    $search_menu_items = theme_mb2mcl_theme_setting($PAGE,'searchlinks');
    $global_search = ($CFG->enableglobalsearch && theme_mb2mcl_moodle_from(2016052300));

    if ($global_search)
    {
        $cls = ' isglobalsearch';
    }

	$output .= '<div class="theme-searchform' . $cls . '" data-action_global="' . $search_action_global . '" data-action_course="' . $search_action . '" style="display:none;">';
    $output .= '<a href="#" class="close-btn searchform-close" title="' . get_string( 'closebuttontitle' ) . '"><i class="lni-close"></i></a>';
	$output .= '<form id="theme-search" action="' . new moodle_url($CFG->wwwroot . '/course/search.php') . '" method="get">';
	$output .= '<input id="theme-coursesearchbox" type="text" value="" placeholder="' . get_string('enteryoursearchquery','search') . '" name="search">';

    if ($global_search)
    {
        $output .= '<div class="search-switch">';
        $output .= '<span class="switch custom-switch">';
        $output .= '<input type="checkbox" name="theme-search-checkbox" class="custom-control-input" id="theme-search-checkbox" data-name="theme-search-checkbox">';
        $output .= '<label for="theme-search-checkbox" class="custom-control-label" data-globalstring="' . get_string('globalsearch','admin') .
        '" data-coursesstring="' . get_string('searchcourses','core') . '">' . get_string('searchcourses','core') . '</label>';
        $output .= '</span>';
        $output .= '<button type="submit"><i class="lni-search"></i></button>';
        $output .= '</div>';
    }

	$output .= !$global_search ? '<button type="submit"><i class="lni-search"></i></button>' : '';
	$output .= '</form>';

    if ($search_menu_items !== '')
    {
        $output .= '<div class="theme-searchlinks">';
        $output .= theme_mb2mcl_static_content($search_menu_items, array('first'=>get_string('popularlinks','theme_mb2mcl')));
        $output .= '</div>';
    }

    $output .= '</div>';

	return $output;

}






/*
 *
 * Method to theme links
 *
 */
function theme_mb2mcl_theme_links ()
{

    global $CFG, $USER, $COURSE, $PAGE;


	$output = '';
	$settings = theme_mb2mcl_settings_arr();
	$theme_name = theme_mb2mcl_themename();
	$purgelink = new moodle_url($CFG->wwwroot . '/admin/purgecaches.php', array('confirm'=>1, 'sesskey'=>$USER->sesskey, 'returnurl'=>$PAGE->url->out_as_local_url()));

	if (is_siteadmin())
	{
		$output .= '<div class="theme-links closed">';
		$output .= '<a href="#" class="toggle-open" data-width="350"><i class="icon1 fa fa-sliders"></i></a>';
		$output .= '<ul>';

		foreach ($settings as $id=>$v)
		{

			$url = $v['url'] ? $v['url'] : new moodle_url($CFG->wwwroot . '/admin/settings.php?section=theme_' . $theme_name . '_settings' . $id);

			$output .= '<li>';
			$output .= '<a href="' . $url . '" title="' . $v['name'] . '">';
			$output .= '<i class="' . $v['icon'] . '"></i> ';
			$output .= $v['name'];
			$output .= '</a>';
			$output .= '</li>';

		}

		$docUrl = get_string('urldoc','theme_mb2mcl');
		$moreUrl = get_string('urlmore','theme_mb2mcl');


        $output .= '<li class="custom-link"><a href="' . new moodle_url( $CFG->wwwroot . '/admin/search.php' ) . '" class="siteadmin-link"><i class="fa fa-sitemap"></i> ' . get_string( 'administrationsite' ) . '</a></li>';
		$output .= '<li class="custom-link"><a href="' . $purgelink . '" class="link-purgecaches" title="' .
		get_string('purgecaches','admin') . '"><i class="fa fa-cog"></i> ' . get_string('purgecaches','admin') . '</a></li>';
		$output .= '<li class="custom-link"><a href="' . $docUrl . '"  target="_blank" class="link-doc" title="' .
		get_string('documentation','theme_mb2mcl') . '"><i class="fa fa-info-circle"></i> ' . get_string('documentation','theme_mb2mcl') . '</a></li>';
		$output .= '<li class="custom-link"><a href="' . $moreUrl . '" target="_blank" class="link-more" title="' .
		get_string('morethemes','theme_mb2mcl') . '"><i class="fa fa-shopping-basket"></i> ' . get_string('morethemes','theme_mb2mcl') . '</a></li>';

		$output .= '</ul>';
		$output .= '</div>';
	}



	return $output;

}






/*
 *
 * Method to get login form
 *
 */
function theme_mb2mcl_login_form ()
{

	global $PAGE, $OUTPUT, $USER, $CFG;

	$output = '';
    $logintoken = '';
    $cls = '';
	$login_url = get_login_url();
    $link_to_login = theme_mb2mcl_theme_setting($PAGE, 'loginlinktopage');
    $loginlinks = theme_mb2mcl_theme_setting($PAGE, 'loginlinks');
    $isLoginPage = theme_mb2mcl_is_login($PAGE);

    if ( $loginlinks || ( isloggedin() && ! isguestuser() ) )
    {
        $cls .= ' loginlinks';
    }
    else
    {
        $cls .= ' nologinlinks';
    }

    if (theme_mb2mcl_moodle_from(2017111300) && method_exists('\core\session\manager','get_login_token'))
    {
        $logintoken = '<input type="hidden" name="logintoken" value="' . s(\core\session\manager::get_login_token()) .'" />';
    }

	$output .= '<div class="theme-loginform' . $cls . '" style="display:none;">';

    $output .= '<a href="#" class="close-btn loginform-close" title="' . get_string( 'closebuttontitle' ) . '"><i class="lni-close"></i></a>';

    if ( ( !isloggedin() || isguestuser() ) && ! $link_to_login )
	{

        if ( $isLoginPage )
        {
            return;
        }

        if ( $loginlinks )
        {
            $output .= '<div class="row">';
            $output .= '<div class="col-md-6 order-2 col-loginform">';
            $output .= '<div class="col-inner">';
        }

		$output .= '<form id="header-form-login" method="post" action="' . $login_url. '">';
		$output .= '<div class="form-field">';
		$output .= '<label id="user"><i class="lni-user"></i></label>';
		$output .= '<input id="login-username" type="text" name="username" placeholder="' . get_string('username') . '" />';
		$output .= '</div>';
		$output .= '<div class="form-field">';
		$output .= '<label id="pass"><i class="lni-lock"></i></label>';
		$output .= '<input id="login-password" type="password" name="password" placeholder="' . get_string('password') . '" />';
		$output .= '</div>';
		$output .= '<button type="submit" class="btn-fw">' . get_string('login', 'core') . '</button>';
        $output .= $logintoken;
		$output .= '</form>';

		$loginLink = new moodle_url($CFG->wwwroot . '/login/forgot_password.php');
        $signupLink = new moodle_url($CFG->wwwroot . '/login/signup.php');

        $output .= '<p class="login-info"><a href="' . $loginLink . '">' . get_string('forgotten','core') . '</a></p>';

        if ( $CFG->registerauth )
        {
            $output .= '<p class="login-info signup"><a href="' . $signupLink . '">' . get_string('startsignup','core') . '</a></p>';
        }

		// From Moodle 3.3 release
		if ( theme_mb2mcl_moodle_from(2017051500) && theme_mb2mcl_theme_setting( $PAGE,'loginsocial' ) )
		{
			$authsequence = get_enabled_auth_plugins(true); // Get all auths, in sequence.
            $potentialidps = array();
            foreach ( $authsequence as $authname )
			{
                $authplugin = get_auth_plugin($authname);
                $potentialidps = array_merge($potentialidps, $authplugin->loginpage_idp_list($PAGE->url->out(false)));
            }

			if (! empty( $potentialidps ) )
			{
     			$output .= '<div class="potentialidps">';
               	$output .= '<h6>' . get_string('potentialidps', 'auth') . '</h6>';
                $output .= '<div class="potentialidplist">';

                foreach ($potentialidps as $idp)
				{
              		$output .= '<div class="potentialidp">';
                   	$output .= '<a class="btn btn-default" ';
                   	$output.= 'href="' . $idp['url']->out() . '" title="' . s($idp['name']) . '">';
                    if (!empty($idp['iconurl']))
					{
                        $output .= '<img src="' . s($idp['iconurl']) . '" width="24" height="24" class="m-r-1"/>';
                    }
                    $output .= s($idp['name']) . '</a></div>';
                }

                $output .= '</div>';
                $output .= '</div>';
            }
		}

        if ($loginlinks)
        {
            $output .= '</div>'; // end column inner
            $output .= '</div>'; // end column

            $output .= '<div class="col-md-6 order-1 col-loginlinks">';
            $output .= '<div class="col-inner">';
            $output .= theme_mb2mcl_static_content($loginlinks);
            $output .= '</div>';
            $output .= '</div>';

            $output .= '</div>'; // end row
        }

	}
	elseif ( isloggedin() && !isguestuser() )
	{
        $logout_link = new moodle_url($CFG->wwwroot . '/login/logout.php', array('sesskey'=>sesskey()));
        $profile_link = new moodle_url($CFG->wwwroot . '/user/profile.php', array('id'=>$USER->id));

        $output .= '<div class="row">';

        $output .= '<div class="col-md-7 col-loginusermenu">';
        $output .= '<div class="col-inner">';
        $output .= $OUTPUT->user_menu();
        $output .= '</div>';
        $output .= '</div>';

        $output .= '<div class="col-md-5 col-loginuserdetails">';
        $output .= '<div class="col-inner">';
        $output .= $OUTPUT->user_picture($USER, array('size' => 80, 'class' => 'welcome_userpicture'));
        $output .= '<p class="loggedinas">' . get_string('loggedinas', 'core', '<span><strong>' . $USER->firstname . ' ' . $USER->lastname . '</strong></span> ('  . $USER->username . ')') . '</p>';

        $output .= '<a href="' . $profile_link . '" class="btn btn-default isicon btn-sm btn-full">';
        $output .= '<span class="btn-icon"><i class="lni-user"></i></span>';
        $output .= '<span class="btn-text">' . get_string('profile', 'core') . '</span>';
        $output .= '</a>';

        $output .= '<a href="' . $logout_link . '" class="btn btn-primary isicon btn-sm btn-full">';
        $output .= '<span class="btn-icon"><i class="lni-unlock"></i></span>';
        $output .= '<span class="btn-text">' . get_string('logout', 'core') . '</span>';
        $output .= '</a>';

        $output .= '</div>';
        $output .= '</div>';

        $output .= '</div>';
	}

	$output .= '</div>';

	return $output;

}





/*
 *
 * Method to set body class
 *
 *
 */
function theme_mb2mcl_settings_arr()
{
    global $CFG;
    $themename = theme_mb2mcl_themename();

    $output = array(
        'all' => array('name'=>get_string('allsettings','theme_mb2mcl'), 'icon'=>'fa fa-cogs', 'url'=> new moodle_url($CFG->wwwroot . '/admin/category.php?category=theme_' . $themename)),
		'general' => array('name'=>get_string('settingsgeneral','theme_mb2mcl'), 'icon'=>'fa fa-dashboard', 'url'=>''),
		'features' => array('name'=>get_string('settingsfeatures','theme_mb2mcl'), 'icon'=>'fa fa-rocket', 'url'=>''),
		'fonts' => array('name'=>get_string('settingsfonts','theme_mb2mcl'), 'icon'=>'fa fa-font', 'url'=>''),
		'nav' => array('name'=>get_string('settingsnav','theme_mb2mcl'), 'icon'=>'fa fa-navicon', 'url'=>''),
		'social' => array('name'=>get_string('settingssocial','theme_mb2mcl'), 'icon'=>'fa fa-share-alt', 'url'=>''),
		'style' => array('name'=>get_string('settingsstyle','theme_mb2mcl'), 'icon'=>'fa fa-paint-brush', 'url'=>''),
		'typography' => array('name'=>get_string('settingstypography','theme_mb2mcl'), 'icon'=>'fa fa-text-height', 'url'=>'')
	);

	return $output;

}
