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
 * Method to get course banner
 *
 */
function theme_mb2mcl_course_banner()
{

	global $CFG, $COURSE, $PAGE, $OUTPUT;

	$output = '';
	$banner = theme_mb2mcl_theme_setting( $PAGE, 'banner' );
	$course_image = theme_mb2mcl_course_image_url( $COURSE->id );
	$imgurl = '';

	if ( $course_image )
	{
		$imgurl = $course_image;
	}
	elseif ( $banner )
	{
		$bannerimages = theme_mb2mcl_get_fileareaimages( 'bannerimg' );

		if ( count( $bannerimages ) > 0 )
		{
			$key = array_rand( $bannerimages, 1 );
			$imgurl = $bannerimages[$key];
		}
		else
		{
			$imgurl = $OUTPUT->image_url('header-defult','theme');
		}
	}

	if ( ! $imgurl )
	{
		return;
	}

	$cls = ' isimage';
	$banner_style = ' style="background-image:url(\'' . $imgurl  . '\');"';

	$output .= '<div class="theme-banner' . $cls . '"' . $banner_style . '>';
	$output .= '</div>';

	return $output;

}





/*
 *
 * Method to get image from course summary files
 *
 */
function theme_mb2mcl_course_image_url( $courseid = null )
{
	global $CFG, $PAGE;

	$iscourse = ( $courseid > 1 );

	if ( ! $courseid || ! theme_mb2mcl_theme_setting( $PAGE, 'cbannerimg' ) || ! $iscourse )
	{
		return;
	}

	require_once( $CFG->libdir . '/filelib.php' );

	$url = '';
	$context = context_course::instance( $courseid );
	$fs = get_file_storage();
	$files = $fs->get_area_files( $context->id, 'course', 'overviewfiles', 0 );

	foreach ( $files as $f )
	{
		if ( $f->is_valid_image() )
		{
			$url = moodle_url::make_pluginfile_url(
				$f->get_contextid(), $f->get_component(), $f->get_filearea(), null, $f->get_filepath(), $f->get_filename(), false );
		}
	}

	return $url;

}





/*
 *
 * Method to set block class
 *
 *
 */
function theme_mb2mcl_page_cls($page, $course = false)
{

	$output = '';

	$isPage = $page->pagetype === 'mod-page-view';

	if ( ! isset( $page->cm->id ) )
	{
		return;
	}

	if ($course)
	{
		$pageId = $isPage ? $page->course->id : 0;
		$output .= theme_mb2mcl_line_classes(theme_mb2mcl_theme_setting($page, 'coursecls'), $pageId);
	}
	else
	{
		$pageId = $isPage ? $page->cm->id : 0;
		$output .= theme_mb2mcl_line_classes(theme_mb2mcl_theme_setting($page, 'pagecls'), $pageId);
	}


	return $output;

}







/*
 *
 * Method to set block class
 *
 *
 */
function theme_mb2mcl_course_cls ($page)
{

	$output = '';


	$output .= theme_mb2mcl_line_classes(theme_mb2mcl_theme_setting($page, 'coursescls'), $page->course->id);


	return $output;

}





/*
 *
 * Method to set body class for course category theme
 *
 */
function theme_mb2mcl_courselist_cls($page)
{

	$output = '';

	$isCourse = $page->pagetype === 'course-index';
	$isCourseCat = $page->pagetype === 'course-index-category';
	$catId = ($isCourseCat && isset($page->category->id)) ? $page->category->id : 0;
	$clsPreff = 'coursetheme-';

	if ($catId > 0)
	{
		$output .= $clsPreff . theme_mb2mcl_line_classes(theme_mb2mcl_theme_setting($page, 'coursecattheme'), $catId);
	}
	else
	{
		$output .= $clsPreff . theme_mb2mcl_theme_setting($page, 'coursetheme');
	}

	return $output;

}
